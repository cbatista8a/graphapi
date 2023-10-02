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

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartProduct
 * @Type
 * @ORM\Table(name="ps_cart_product", indexes={@ORM\Index(name="id_cart_order", columns={"id_cart", "date_add", "id_product", "id_product_attribute"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"})})
 * @ORM\Entity
 */
class PsCartProduct
{
    /**
     * @var PsCart
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PsCart", inversedBy="cart_products")
     * @ORM\JoinColumn(name="id_cart", referencedColumnName="id_cart")
     */
    private PsCart $cart;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PsProduct")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     */
    private PsProduct $product;

    /**
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=false, options={"unsigned"=true})
     */
    private int $id_address_delivery = 0;

    /**
     * @ORM\Column(name="id_product_attribute")
     */
    private int $product_attribute = 0;

    /**
     * @ORM\Column(name="id_customization")
     */
    private int $customization = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"=1,"unsigned"=true})
     */
    private int $id_shop = 1;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private int $quantity;

    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date_add;

    public function __construct()
    {
        $this->setDateAdd();
    }


    /**
     * @Field
     * @return PsProduct
     */
    public function getProduct(): PsProduct
    {
        return $this->product;
    }

    /**
     * @param PsProduct $product
     * @return PsCartProduct
     */
    public function setProduct(PsProduct $product): PsCartProduct
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdAddressDelivery()
    {
        return $this->id_address_delivery;
    }

    /**
     * @param int $id_address_delivery
     * @return PsCartProduct
     */
    public function setIdAddressDelivery(int $id_address_delivery): PsCartProduct
    {
        $this->id_address_delivery = $id_address_delivery;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getProductAttribute(): ?int
    {
        return $this->product_attribute;
    }

    /**
     * @param int $product_attribute
     * @return PsCartProduct
     */
    public function setProductAttribute(int $product_attribute): PsCartProduct
    {
        $this->product_attribute = $product_attribute;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getCustomization(): int
    {
        return $this->customization;
    }

    /**
     * @param int $customization
     * @return PsCartProduct
     */
    public function setCustomization(int $customization): PsCartProduct
    {
        $this->customization = $customization;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdShop()
    {
        return $this->id_shop;
    }

    /**
     * @param int $id_shop
     * @return PsCartProduct
     */
    public function setIdShop(int $id_shop): PsCartProduct
    {
        $this->id_shop = $id_shop;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return PsCartProduct
     */
    public function setQuantity(int $quantity): PsCartProduct
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param int $new_quantity
     * @return void
     */
    public function addQuantity(int $new_quantity)
    {
        $this->quantity += $new_quantity;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateAdd(): \DateTimeImmutable
    {
        return $this->date_add;
    }

    /**
     * @return PsCartProduct
     */
    public function setDateAdd(): PsCartProduct
    {
        $this->date_add = new \DateTimeImmutable();
        return $this;
    }

    /**
     * @Field
     * @return PsCart
     */
    public function getCart(): PsCart
    {
        return $this->cart;
    }

    /**
     * @param PsCart $cart
     * @return PsCartProduct
     */
    public function setCart(PsCart $cart): PsCartProduct
    {
        $this->cart = $cart;
        return $this;
    }


}
