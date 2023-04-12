<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplyOrderReceiptHistory
 *
 * @ORM\Table(name="ps_supply_order_receipt_history", indexes={@ORM\Index(name="id_supply_order_detail", columns={"id_supply_order_detail"}), @ORM\Index(name="id_supply_order_state", columns={"id_supply_order_state"})})
 * @ORM\Entity
 */
class PsSupplyOrderReceiptHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_receipt_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderReceiptHistory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_lastname", type="string", length=255, nullable=true)
     */
    private $employeeLastname = '';
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_firstname", type="string", length=255, nullable=true)
     */
    private $employeeFirstname = '';
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderState;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
