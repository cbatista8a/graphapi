<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalOrder
 *
 * @ORM\Table(name="ps_paypal_order")
 * @ORM\Entity
 */
class PsPaypalOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_order", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var string
     *
     * @ORM\Column(name="id_transaction", type="string", length=255, nullable=false)
     */
    private $idTransaction;
    /**
     * @var string
     *
     * @ORM\Column(name="id_payment", type="string", length=255, nullable=false)
     */
    private $idPayment;
    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=255, nullable=false)
     */
    private $paymentMethod;
    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=false)
     */
    private $currency;
    /**
     * @var string
     *
     * @ORM\Column(name="intent", type="string", length=255, nullable=false)
     */
    private $intent;
    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $totalPaid;
    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=255, nullable=false)
     */
    private $paymentStatus;
    /**
     * @var string
     *
     * @ORM\Column(name="total_prestashop", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $totalPrestashop;
    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=255, nullable=false)
     */
    private $method;
    /**
     * @var string
     *
     * @ORM\Column(name="payment_tool", type="string", length=255, nullable=false)
     */
    private $paymentTool;
    /**
     * @var bool
     *
     * @ORM\Column(name="sandbox", type="boolean", nullable=false)
     */
    private $sandbox;
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
