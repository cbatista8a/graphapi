<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsStockMvt
 *
 * @ORM\Table(name="ps_stock_mvt", indexes={@ORM\Index(name="id_stock", columns={"id_stock"}), @ORM\Index(name="id_stock_mvt_reason", columns={"id_stock_mvt_reason"})})
 * @ORM\Entity
 */
class PsStockMvt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_mvt", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStockMvt;
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false)
     */
    private $idStock;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order", type="integer", nullable=true)
     */
    private $idOrder;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=true)
     */
    private $idSupplyOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_mvt_reason", type="integer", nullable=false)
     */
    private $idStockMvtReason;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_lastname", type="string", length=32, nullable=true)
     */
    private $employeeLastname;
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_firstname", type="string", length=32, nullable=true)
     */
    private $employeeFirstname;
    /**
     * @var int
     *
     * @ORM\Column(name="physical_quantity", type="integer", nullable=false)
     */
    private $physicalQuantity;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var int
     *
     * @ORM\Column(name="sign", type="smallint", nullable=false, options={"default"="1"})
     */
    private $sign = '1';
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="last_wa", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $lastWa = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="current_wa", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $currentWa = '0.000000';
    /**
     * @var int|null
     *
     * @ORM\Column(name="referer", type="bigint", nullable=true)
     */
    private $referer;
}
