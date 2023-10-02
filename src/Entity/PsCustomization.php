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
 * PsCustomization
 * @Type
 * @ORM\Table(name="ps_customization", indexes={@ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_cart_product", columns={"id_cart", "id_product", "id_product_attribute"})})
 * @ORM\Entity
 */
class PsCustomization
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customization", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAddressDelivery = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity_refunded", type="integer", nullable=false)
     */
    private $quantityRefunded = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity_returned", type="integer", nullable=false)
     */
    private $quantityReturned = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="in_cart", type="boolean", nullable=false)
     */
    private $inCart = '0';

    /**
     * @Field
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PsCustomization
     */
    public function setId(int $id): PsCustomization
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * @param int $idAddressDelivery
     * @return PsCustomization
     */
    public function setIdAddressDelivery(int $idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdCart(): int
    {
        return $this->idCart;
    }

    /**
     * @param int $idCart
     * @return PsCustomization
     */
    public function setIdCart(int $idCart): PsCustomization
    {
        $this->idCart = $idCart;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     * @return PsCustomization
     */
    public function setIdProduct(int $idProduct): PsCustomization
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }

    /**
     * @param int $idProductAttribute
     * @return PsCustomization
     */
    public function setIdProductAttribute(int $idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return PsCustomization
     */
    public function setQuantity(int $quantity): PsCustomization
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getQuantityRefunded()
    {
        return $this->quantityRefunded;
    }

    /**
     * @param int $quantityRefunded
     * @return PsCustomization
     */
    public function setQuantityRefunded(int $quantityRefunded)
    {
        $this->quantityRefunded = $quantityRefunded;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getQuantityReturned()
    {
        return $this->quantityReturned;
    }

    /**
     * @param int $quantityReturned
     * @return PsCustomization
     */
    public function setQuantityReturned(int $quantityReturned)
    {
        $this->quantityReturned = $quantityReturned;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isInCart()
    {
        return $this->inCart;
    }

    /**
     * @param bool $inCart
     * @return PsCustomization
     */
    public function setInCart(bool $inCart)
    {
        $this->inCart = $inCart;
        return $this;
    }


}
