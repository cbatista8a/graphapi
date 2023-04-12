<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrders
 *
 * @ORM\Table(name="ps_orders", indexes={@ORM\Index(name="id_address_invoice", columns={"id_address_invoice"}), @ORM\Index(name="id_carrier", columns={"id_carrier"}), @ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="reference", columns={"reference"}), @ORM\Index(name="id_address_delivery", columns={"id_address_delivery"}), @ORM\Index(name="invoice_number", columns={"invoice_number"}), @ORM\Index(name="current_state", columns={"current_state"}), @ORM\Index(name="id_currency", columns={"id_currency"}), @ORM\Index(name="id_cart", columns={"id_cart"}), @ORM\Index(name="id_shop_group", columns={"id_shop_group"}), @ORM\Index(name="id_lang", columns={"id_lang"}), @ORM\Index(name="date_add", columns={"date_add"}), @ORM\Index(name="id_customer", columns={"id_customer"})})
 * @ORM\Entity
 */
class PsOrders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrder;
    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=9, nullable=true)
     */
    private $reference;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddressDelivery;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address_invoice", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddressInvoice;
    /**
     * @var int
     *
     * @ORM\Column(name="current_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $currentState;
    /**
     * @var string
     *
     * @ORM\Column(name="secure_key", type="string", length=32, nullable=false, options={"default"="-1"})
     */
    private $secureKey = '-1';
    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=255, nullable=false)
     */
    private $payment;
    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=true)
     */
    private $module;
    /**
     * @var bool
     *
     * @ORM\Column(name="recyclable", type="boolean", nullable=false)
     */
    private $recyclable = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="gift", type="boolean", nullable=false)
     */
    private $gift = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="gift_message", type="text", length=65535, nullable=true)
     */
    private $giftMessage;
    /**
     * @var bool
     *
     * @ORM\Column(name="mobile_theme", type="boolean", nullable=false)
     */
    private $mobileTheme = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_number", type="string", length=64, nullable=true)
     */
    private $shippingNumber;
    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalDiscounts = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalDiscountsTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalDiscountsTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaid = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaidTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaidTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaidReal = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_products", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalProducts = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_products_wt", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalProductsWt = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShipping = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="carrier_tax_rate", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $carrierTaxRate = '0.000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_wrapping", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalWrapping = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_wrapping_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalWrappingTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_wrapping_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalWrappingTaxExcl = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="round_mode", type="boolean", nullable=false, options={"default"="2"})
     */
    private $roundMode = '2';
    /**
     * @var bool
     *
     * @ORM\Column(name="round_type", type="boolean", nullable=false, options={"default"="1"})
     */
    private $roundType = \true;
    /**
     * @var int
     *
     * @ORM\Column(name="invoice_number", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $invoiceNumber = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="delivery_number", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deliveryNumber = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_date", type="datetime", nullable=false)
     */
    private $invoiceDate;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=false)
     */
    private $deliveryDate;
    /**
     * @var int
     *
     * @ORM\Column(name="valid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $valid = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;
}
