<?php

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CubaDevOps\GraphApi\Entity\PsCart;
use CubaDevOps\GraphApi\Entity\PsCartProduct;
use CubaDevOps\GraphApi\Entity\PsProduct;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Mutation;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Doctrine\ORM\EntityManagerInterface;

class CartRepository
{

    private EntityManagerInterface $entity_manager;

    public function __construct(EntityManagerInterface $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    /**
     * @Query
     * @param int $customer_id
     * @return PsCart|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function cart(int $customer_id): ?PsCart
    {
        return $this->entity_manager->getRepository(PsCart::class)->findOneBy(['customer' => $customer_id],['id' => 'DESC']);
    }

    /**
     * @Mutation
     * @param int $id_customer
     * @param int $id_product
     * @param int $quantity
     * @return PsCart|null
     */
    public function addToCart(int $id_customer,int $id_product, int $quantity): ?PsCart
    {
        /** @var PsProduct|null $product */
        if (($cart = $this->cart($id_customer)) && ($product = $this->entity_manager->find(PsProduct::class, $id_product))){

            $product_cart = new PsCartProduct();
            $product_cart->setProduct($product)
                ->setCart($cart)
            ->setQuantity($quantity);
            $cart->addProduct($product_cart);
            $this->entity_manager->persist($cart);
            $this->entity_manager->flush();
        }
        return $cart;
    }

    /**
     * @Mutation
     * @param int $id_customer
     * @param int $id_product
     * @param int $quantity
     * @return PsCart|null
     */
    public function updateQuantity(int $id_customer, int $id_product, int $quantity): ?PsCart
    {
        /** @var PsProduct|null $product */
        if (($cart = $this->cart($id_customer)) && ($product = $this->entity_manager->find(PsProduct::class, $id_product))){

            $product_cart = new PsCartProduct();
            $product_cart->setProduct($product)
                ->setCart($cart)
                ->setQuantity($quantity);
            $cart->updateProductQuantity($product_cart);
            $this->entity_manager->persist($cart);
            $this->entity_manager->flush();
        }
        return $cart;
    }
}