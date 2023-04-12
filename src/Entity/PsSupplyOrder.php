<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplyOrder
 *
 * @ORM\Table(name="ps_supply_order", indexes={@ORM\Index(name="id_supplier", columns={"id_supplier"}), @ORM\Index(name="reference", columns={"reference"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class PsSupplyOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplier;
    /**
     * @var string
     *
     * @ORM\Column(name="supplier_name", type="string", length=64, nullable=false)
     */
    private $supplierName;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderState;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_ref_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idRefCurrency;
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;
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
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_delivery_expected", type="datetime", nullable=true)
     */
    private $dateDeliveryExpected;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_with_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalWithDiscountTe = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTax = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ti", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTi = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountRate = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_value_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountValueTe = '0.000000';
    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=true)
     */
    private $isTemplate = '0';
}
