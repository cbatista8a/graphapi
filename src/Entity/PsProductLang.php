<?php

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
        return $this->ps_product;
    }

    /**
     * @param PsProduct $ps_product
     * @return PsProductLang
     */
    public function setProduct(PsProduct $ps_product): PsProductLang
    {
        $this->ps_product = $ps_product;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return PsProductLang
     */
    public function setIdShop(int $idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdLang(): int
    {
        return $this->idLang;
    }

    /**
     * @param int $idLang
     * @return PsProductLang
     */
    public function setIdLang(int $idLang): PsProductLang
    {
        $this->idLang = $idLang;
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
     * @var int
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="PsProduct", inversedBy="langs")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     */
    private PsProduct $ps_product;

    /**
     * @ORM\ManyToOne(targetEntity="PsShop")
     * O
     */
    private PsShop $shop;


    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
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
