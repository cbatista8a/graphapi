<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderDetail
 *
 * @ORM\Table(name="ps_order_detail", indexes={@ORM\Index(name="product_attribute_id", columns={"product_attribute_id"}), @ORM\Index(name="id_order_id_order_detail", columns={"id_order", "id_order_detail"}), @ORM\Index(name="product_id", columns={"product_id", "product_attribute_id"}), @ORM\Index(name="id_tax_rules_group", columns={"id_tax_rules_group"}), @ORM\Index(name="order_detail_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=true)
     */
    private $idOrderInvoice;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idWarehouse = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productId;
    /**
     * @var int|null
     *
     * @ORM\Column(name="product_attribute_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $productAttributeId;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customization", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCustomization = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, nullable=false)
     */
    private $productName;
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity_in_stock", type="integer", nullable=false)
     */
    private $productQuantityInStock = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity_refunded", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantityRefunded = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity_return", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantityReturn = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity_reinjected", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantityReinjected = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="product_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $productPrice = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_percent", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reductionPercent = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $reductionAmount = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_amount_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $reductionAmountTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_amount_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $reductionAmountTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="group_reduction", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $groupReduction = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="product_quantity_discount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $productQuantityDiscount = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_ean13", type="string", length=13, nullable=true)
     */
    private $productEan13;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_isbn", type="string", length=32, nullable=true)
     */
    private $productIsbn;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_upc", type="string", length=12, nullable=true)
     */
    private $productUpc;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_mpn", type="string", length=40, nullable=true)
     */
    private $productMpn;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_reference", type="string", length=64, nullable=true)
     */
    private $productReference;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_supplier_reference", type="string", length=64, nullable=true)
     */
    private $productSupplierReference;
    /**
     * @var string
     *
     * @ORM\Column(name="product_weight", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $productWeight;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idTaxRulesGroup = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="tax_computation_method", type="boolean", nullable=false)
     */
    private $taxComputationMethod = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="tax_name", type="string", length=16, nullable=false)
     */
    private $taxName;
    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $taxRate = '0.000';
    /**
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="ecotax_tax_rate", type="decimal", precision=5, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $ecotaxTaxRate = '0.000';
    /**
     * @var bool
     *
     * @ORM\Column(name="discount_quantity_applied", type="boolean", nullable=false)
     */
    private $discountQuantityApplied = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="download_hash", type="string", length=255, nullable=true)
     */
    private $downloadHash;
    /**
     * @var int|null
     *
     * @ORM\Column(name="download_nb", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $downloadNb = '0';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="download_deadline", type="datetime", nullable=true)
     */
    private $downloadDeadline;
    /**
     * @var string
     *
     * @ORM\Column(name="total_price_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPriceTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_price_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPriceTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitPriceTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitPriceTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping_price_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingPriceTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping_price_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingPriceTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="purchase_supplier_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $purchaseSupplierPrice = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="original_product_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $originalProductPrice = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="original_wholesale_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $originalWholesalePrice = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_refunded_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalRefundedTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_refunded_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalRefundedTaxIncl = '0.000000';
}
