<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplyOrderState
 *
 * @ORM\Table(name="ps_supply_order_state")
 * @ORM\Entity
 */
class PsSupplyOrderState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderState;
    /**
     * @var bool
     *
     * @ORM\Column(name="delivery_note", type="boolean", nullable=false)
     */
    private $deliveryNote = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="editable", type="boolean", nullable=false)
     */
    private $editable = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="receipt_state", type="boolean", nullable=false)
     */
    private $receiptState = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="pending_receipt", type="boolean", nullable=false)
     */
    private $pendingReceipt = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="enclosed", type="boolean", nullable=false)
     */
    private $enclosed = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true)
     */
    private $color;
}
