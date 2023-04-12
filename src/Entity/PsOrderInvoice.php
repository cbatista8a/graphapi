<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderInvoice
 *
 * @ORM\Table(name="ps_order_invoice", indexes={@ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderInvoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderInvoice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false)
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;
    /**
     * @var int
     *
     * @ORM\Column(name="delivery_number", type="integer", nullable=false)
     */
    private $deliveryNumber;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $deliveryDate;
    /**
     * @var string
     *
     * @ORM\Column(name="total_discount_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalDiscountTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_discount_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalDiscountTaxIncl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaidTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalPaidTaxIncl = '0.000000';
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
     * @ORM\Column(name="total_shipping_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_shipping_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalShippingTaxIncl = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="shipping_tax_computation_method", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $shippingTaxComputationMethod;
    /**
     * @var string
     *
     * @ORM\Column(name="total_wrapping_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalWrappingTaxExcl = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_wrapping_tax_incl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalWrappingTaxIncl = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_address", type="text", length=65535, nullable=true)
     */
    private $shopAddress;
    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
