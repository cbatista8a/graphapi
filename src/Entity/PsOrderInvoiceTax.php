<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderInvoiceTax
 *
 * @ORM\Table(name="ps_order_invoice_tax", indexes={@ORM\Index(name="id_tax", columns={"id_tax"})})
 * @ORM\Entity
 */
class PsOrderInvoiceTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderInvoice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTax;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     */
    private $type;
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $amount = '0.000000';
}
