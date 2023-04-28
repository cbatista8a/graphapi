<?php

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CartRule;
use Context;
use CubaDevOps\GraphApi\Entity\PsCustomer;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Mutation;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Customer;
use Doctrine\ORM\EntityManagerInterface;
use Hook;
use PrestaShop\PrestaShop\Core\Crypto\Hashing;

class CustomerRepository
{

    private Hashing $crypto;
    private EntityManagerInterface $entity_manager;

    public function __construct(EntityManagerInterface $entity_manager, Hashing $crypto)
    {
        $this->entity_manager = $entity_manager;
        $this->crypto = $crypto;
    }

    /**
     * @Query
     * @param int $customer_id
     * @return PsCustomer|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function customer(int $customer_id): ?PsCustomer
    {
        if (!self::getIsLoged()){
            return null;
        }
        return $this->entity_manager->getRepository(PsCustomer::class)->find($customer_id);
    }

    /**
     * @Mutation
     * @param string $email
     * @param string $password
     * @return PsCustomer|null
     * @throws \PrestaShopException
     */
    public function login(string $email, string $password): ?PsCustomer
    {
        /** @var PsCustomer|null $customer */
        $customer = $this->entity_manager->getRepository(PsCustomer::class)->findOneBy(["email" => $email]);
        if (!$customer || $customer->getIsGuest() || !$customer->getActive()) {
            return null;
        }

        Hook::exec('actionAuthenticationBefore');
        if (!$this->crypto->checkHash($password, $customer->getPassword())){
            return null;
        }

        $legacy_customer = new Customer($customer->getId());
        Context::getContext()->updateCustomer($legacy_customer);
        Hook::exec('actionAuthentication', ['customer' => $legacy_customer]);

        // Login information have changed, so we check if the cart rules still apply
        CartRule::autoRemoveFromCart();
        CartRule::autoAddToCart();

        return $customer;
    }

    /**
     * @Mutation
     * @return bool
     */
    public function logout(): bool
    {
        Context::getContext()->customer->logout();
        return self::getIsLoged();
    }

    /**
     * @Query
     * @return bool
     */
    public static function getIsLoged(): bool
    {
        return Context::getContext()->customer->isLogged();
    }
}