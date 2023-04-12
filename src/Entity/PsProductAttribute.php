<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductAttribute
 *
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
    private $idProductAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
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
    private $supplierReference;
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
     * @var string|null
     *
     * @ORM\Column(name="mpn", type="string", length=40, nullable=true)
     */
    private $mpn;
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
    private $unitPriceImpact = '0.000000';
    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_on", type="boolean", nullable=true)
     */
    private $defaultOn;
    /**
     * @var int
     *
     * @ORM\Column(name="minimal_quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $minimalQuantity = '1';
    /**
     * @var int|null
     *
     * @ORM\Column(name="low_stock_threshold", type="integer", nullable=true)
     */
    private $lowStockThreshold;
    /**
     * @var bool
     *
     * @ORM\Column(name="low_stock_alert", type="boolean", nullable=false)
     */
    private $lowStockAlert = '0';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true)
     */
    private $availableDate;
}
