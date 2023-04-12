<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplyOrderHistory
 *
 * @ORM\Table(name="ps_supply_order_history", indexes={@ORM\Index(name="id_supply_order", columns={"id_supply_order"}), @ORM\Index(name="id_state", columns={"id_state"}), @ORM\Index(name="id_employee", columns={"id_employee"})})
 * @ORM\Entity
 */
class PsSupplyOrderHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderHistory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrder;
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
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idState;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
