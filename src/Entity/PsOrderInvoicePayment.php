<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderInvoicePayment
 *
 * @ORM\Table(name="ps_order_invoice_payment", indexes={@ORM\Index(name="id_order", columns={"id_order"}), @ORM\Index(name="order_payment", columns={"id_order_payment"})})
 * @ORM\Entity
 */
class PsOrderInvoicePayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderInvoice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_payment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderPayment;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
}
