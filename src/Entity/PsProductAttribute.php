<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductAttribute
 * @Type
 * @ORM\Table(name="ps_product_attribute", uniqueConstraints={@ORM\UniqueConstraint(name="product_default", columns={"id_product", "default_on"})}, indexes={@ORM\Index(name="supplier_reference", columns={"supplier_reference"}), @ORM\Index(name="reference", columns={"reference"}), @ORM\Index(name="product_attribute_product", columns={"id_product"}), @ORM\Index(name="id_product_id_product_attribute", columns={"id_product_attribute", "id_product"})})
 * @ORM\Entity
 */
class PsProductAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id_product;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=true)
     */
    private $reference;
    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_reference", type="string", length=64, nullable=true)
     */
    private $supplier_reference;
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '';
    /**
     * @var string|null
     *
     * @ORM\Column(name="ean13", type="string", length=13, nullable=true)
     */
    private $ean13;
    /**
     * @var string|null
     *
     * @ORM\Column(name="isbn", type="string", length=32, nullable=true)
     */
    private $isbn;
    /**
     * @var string|null
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=true)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $wholesalePrice = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $weight = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_impact", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unit_price_impact = '0.000000';
    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_on", type="boolean", nullable=true)
     */
    private $default_on;
    /**
     * @var int
     *
     * @ORM\Column(name="minimal_quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $minimal_quantity = '1';
    /**
     * @var int|null
     *
     * @ORM\Column(name="low_stock_threshold", type="integer", nullable=true)
     */
    private $low_stock_threshold;
    /**
     * @var bool
     *
     * @ORM\Column(name="low_stock_alert", type="boolean", nullable=false)
     */
    private $low_stock_alert = '0';
    /**
     * @var \DateTimeImmutable|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true)
     */
    private $available_date;

    /**
     * @Field
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->id_product;
    }

    /**
     * @param int $id_product
     * @return PsProductAttribute
     */
    public function setIdProduct(int $id_product): PsProductAttribute
    {
        $this->id_product = $id_product;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     * @return PsProductAttribute
     */
    public function setReference(?string $reference): PsProductAttribute
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getSupplierReference(): ?string
    {
        return $this->supplier_reference;
    }

    /**
     * @param string $supplier_reference
     * @return PsProductAttribute
     */
    public function setSupplierReference(string $supplier_reference): PsProductAttribute
    {
        $this->supplier_reference = $supplier_reference;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return PsProductAttribute
     */
    public function setLocation(string $location): PsProductAttribute
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    /**
     * @param string $ean13
     * @return PsProductAttribute
     */
    public function setEan13(string $ean13): PsProductAttribute
    {
        $this->ean13 = $ean13;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     * @return PsProductAttribute
     */
    public function setIsbn(string $isbn): PsProductAttribute
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     * @return PsProductAttribute
     */
    public function setUpc(string $upc): PsProductAttribute
    {
        $this->upc = $upc;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getWholesalePrice(): string
    {
        return $this->wholesalePrice;
    }

    /**
     * @param string $wholesalePrice
     * @return PsProductAttribute
     */
    public function setWholesalePrice(string $wholesalePrice): PsProductAttribute
    {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return PsProductAttribute
     */
    public function setPrice(string $price): PsProductAttribute
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getEcotax(): string
    {
        return $this->ecotax;
    }

    /**
     * @param string $ecotax
     * @return PsProductAttribute
     */
    public function setEcotax(string $ecotax): PsProductAttribute
    {
        $this->ecotax = $ecotax;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return PsProductAttribute
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return PsProductAttribute
     */
    public function setWeight(string $weight): PsProductAttribute
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getUnitPriceImpact(): string
    {
        return $this->unit_price_impact;
    }

    /**
     * @param string $unit_price_impact
     * @return PsProductAttribute
     */
    public function setUnitPriceImpact(string $unit_price_impact): PsProductAttribute
    {
        $this->unit_price_impact = $unit_price_impact;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getDefaultOn(): ?bool
    {
        return (bool)$this->default_on;
    }

    /**
     * @param bool $default_on
     * @return PsProductAttribute
     */
    public function setDefaultOn(bool $default_on): PsProductAttribute
    {
        $this->default_on = $default_on;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getMinimalQuantity()
    {
        return $this->minimal_quantity;
    }

    /**
     * @param int $minimal_quantity
     * @return PsProductAttribute
     */
    public function setMinimalQuantity(int $minimal_quantity)
    {
        $this->minimal_quantity = $minimal_quantity;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getLowStockThreshold(): ?int
    {
        return $this->low_stock_threshold;
    }

    /**
     * @param int $low_stock_threshold
     * @return PsProductAttribute
     */
    public function setLowStockThreshold(int $low_stock_threshold): PsProductAttribute
    {
        $this->low_stock_threshold = $low_stock_threshold;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getLowStockAlert()
    {
        return $this->low_stock_alert;
    }

    /**
     * @param bool $low_stock_alert
     * @return PsProductAttribute
     */
    public function setLowStockAlert(bool $low_stock_alert)
    {
        $this->low_stock_alert = $low_stock_alert;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable|null
     */
    public function getAvailableDate(): ?\DateTimeImmutable
    {
        return $this->available_date;
    }

    /**
     * @param \DateTimeImmutable|null $available_date
     * @return PsProductAttribute
     */
    public function setAvailableDate(?\DateTimeImmutable $available_date): PsProductAttribute
    {
        $this->available_date = $available_date;
        return $this;
    }


}
