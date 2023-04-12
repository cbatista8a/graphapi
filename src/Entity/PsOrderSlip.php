<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderSlip
 *
 * @ORM\Table(name="ps_order_slip", indexes={@ORM\Index(name="order_slip_customer", columns={"id_customer"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderSlip
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_slip", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderSlip;
    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_products_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalProductsTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_products_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalProductsTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_shipping_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalShippingTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_shipping_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalShippingTaxIncl;
    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_cost", type="boolean", nullable=false)
     */
    private $shippingCost = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $amount = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="shipping_cost_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $shippingCostAmount = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="partial", type="boolean", nullable=false)
     */
    private $partial;
    /**
     * @var bool
     *
     * @ORM\Column(name="order_slip_type", type="boolean", nullable=false)
     */
    private $orderSlipType = '0';
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
}
