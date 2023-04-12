<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplyOrderDetail
 *
 * @ORM\Table(name="ps_supply_order_detail", indexes={@ORM\Index(name="id_supply_order", columns={"id_supply_order", "id_product"}), @ORM\Index(name="id_product_product_attribute", columns={"id_product", "id_product_attribute"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"})})
 * @ORM\Entity
 */
class PsSupplyOrderDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;
    /**
     * @var string
     *
     * @ORM\Column(name="supplier_reference", type="string", length=64, nullable=false)
     */
    private $supplierReference;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;
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
     * @var string|null
     *
     * @ORM\Column(name="exchange_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $exchangeRate = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $unitPriceTe = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity_expected", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityExpected;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity_received", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityReceived;
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountRate = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_value_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountValueTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_with_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceWithDiscountTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxRate = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_value", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxValue = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_ti", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTi = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_value_with_order_discount", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxValueWithOrderDiscount = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_with_order_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceWithOrderDiscountTe = '0.000000';
}
