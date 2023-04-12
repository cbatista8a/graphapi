<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderCarrier
 *
 * @ORM\Table(name="ps_order_carrier", indexes={@ORM\Index(name="id_order_invoice", columns={"id_order_invoice"}), @ORM\Index(name="id_carrier", columns={"id_carrier"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_carrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderCarrier;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idOrderInvoice;
    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $weight;
    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $shippingCostTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $shippingCostTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="string", length=64, nullable=true)
     */
    private $trackingNumber;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
