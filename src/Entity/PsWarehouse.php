<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsWarehouse
 *
 * @ORM\Table(name="ps_warehouse")
 * @ORM\Entity
 */
class PsWarehouse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWarehouse;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddress;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=true)
     */
    private $reference;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="management_type", type="string", length=0, nullable=false, options={"default"="WA"})
     */
    private $managementType = 'WA';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
}
