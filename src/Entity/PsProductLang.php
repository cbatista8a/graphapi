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
 * PsProductLang
 * @Type
 * @ORM\Table(name="ps_product_lang", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="id_lang", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsProductLang
{
    /**
     * @Field
     * @return PsProduct
     */
    public function getProduct(): PsProduct
    {
        return $this->product;
    }

    /**
     * @param PsProduct $ps_product
     * @return PsProductLang
     */
    public function setProduct(PsProduct $ps_product): PsProductLang
    {
        $ps_product->setLang($this);
        $this->product = $ps_product;
        return $this;
    }

    /**
     * @Field
     * @return PsShop
     */
    public function getShop(): PsShop
    {
        return $this->shop;
    }

    /**
     * @param PsShop $shop
     * @return PsProductLang
     */
    public function setShop(PsShop $shop): PsProductLang
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * @Field
     * @return PsLang
     */
    public function getLang(): PsLang
    {
        return $this->lang;
    }

    /**
     * @param PsLang $lang
     * @return PsProductLang
     */
    public function setLang(PsLang $lang): PsProductLang
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return PsProductLang
     */
    public function setDescription(?string $description): PsProductLang
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    /**
     * @param string|null $descriptionShort
     * @return PsProductLang
     */
    public function setDescriptionShort(?string $descriptionShort): PsProductLang
    {
        $this->descriptionShort = $descriptionShort;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLinkRewrite(): string
    {
        return $this->linkRewrite;
    }

    /**
     * @param string $linkRewrite
     * @return PsProductLang
     */
    public function setLinkRewrite(string $linkRewrite): PsProductLang
    {
        $this->linkRewrite = $linkRewrite;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     * @return PsProductLang
     */
    public function setMetaDescription(?string $metaDescription): PsProductLang
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string|null $metaKeywords
     * @return PsProductLang
     */
    public function setMetaKeywords(?string $metaKeywords): PsProductLang
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @param string|null $metaTitle
     * @return PsProductLang
     */
    public function setMetaTitle(?string $metaTitle): PsProductLang
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PsProductLang
     */
    public function setName(string $name): PsProductLang
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getAvailableNow(): ?string
    {
        return $this->availableNow;
    }

    /**
     * @param string|null $availableNow
     * @return PsProductLang
     */
    public function setAvailableNow(?string $availableNow): PsProductLang
    {
        $this->availableNow = $availableNow;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getAvailableLater(): ?string
    {
        return $this->availableLater;
    }

    /**
     * @param string|null $availableLater
     * @return PsProductLang
     */
    public function setAvailableLater(?string $availableLater): PsProductLang
    {
        $this->availableLater = $availableLater;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDeliveryInStock(): ?string
    {
        return $this->deliveryInStock;
    }

    /**
     * @param string|null $deliveryInStock
     * @return PsProductLang
     */
    public function setDeliveryInStock(?string $deliveryInStock): PsProductLang
    {
        $this->deliveryInStock = $deliveryInStock;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDeliveryOutStock(): ?string
    {
        return $this->deliveryOutStock;
    }

    /**
     * @param string|null $deliveryOutStock
     * @return PsProductLang
     */
    public function setDeliveryOutStock(?string $deliveryOutStock): PsProductLang
    {
        $this->deliveryOutStock = $deliveryOutStock;
        return $this;
    }

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PsProduct", inversedBy="localized_fields")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     */
    private PsProduct $product;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PsShop")
     * @ORM\JoinColumn(name="id_shop", referencedColumnName="id_shop")
     */
    private PsShop $shop;


    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="PsLang")
     * @ORM\JoinColumn(name="id_lang", referencedColumnName="id_lang")
     */
    private PsLang $lang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description_short", type="text", length=65535, nullable=true)
     */
    private $descriptionShort;
    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=128, nullable=false)
     */
    private $linkRewrite;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="string", length=512, nullable=true)
     */
    private $metaDescription;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true)
     */
    private $metaKeywords;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=128, nullable=true)
     */
    private $metaTitle;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="available_now", type="string", length=255, nullable=true)
     */
    private $availableNow;
    /**
     * @var string|null
     *
     * @ORM\Column(name="available_later", type="string", length=255, nullable=true)
     */
    private $availableLater;
    /**
     * @var string|null
     *
     * @ORM\Column(name="delivery_in_stock", type="string", length=255, nullable=true)
     */
    private $deliveryInStock;
    /**
     * @var string|null
     *
     * @ORM\Column(name="delivery_out_stock", type="string", length=255, nullable=true)
     */
    private $deliveryOutStock;

    /**
     * @Field
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
