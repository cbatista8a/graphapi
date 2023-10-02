<?php
/**
 * Copyright since 2020 CubaDevOps
 *
 * @Author : Carlos Batista <carlos.batista@cubadevops.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CartRule;
use Context;
use CubaDevOps\GraphApi\Entity\PsCustomer;
use CubaDevOps\GraphApi\Utils\Auth;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Mutation;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Customer;
use Doctrine\ORM\EntityManagerInterface;
use Hook;
use PrestaShop\PrestaShop\Core\Crypto\Hashing;

class CustomerRepository
{
    use Auth;

    private Hashing $crypto;
    private EntityManagerInterface $entity_manager;

    public function __construct(EntityManagerInterface $entity_manager, Hashing $crypto)
    {
        $this->entity_manager = $entity_manager;
        $this->crypto = $crypto;
    }

    /**
     * @Query
     * @return PsCustomer|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function customer(): ?PsCustomer
    {
        if (!self::isLoged()){
            return null;
        }
        return $this->entity_manager->getRepository(PsCustomer::class)->find(Context::getContext()->customer->id);
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
        if ($customer = $this->customer()){
            return $customer;
        }

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
        return false;
    }

    /**
     * @Query
     * @return bool
     */
    public function getIsLoged(): bool
    {
        return self::isLoged();
    }
}