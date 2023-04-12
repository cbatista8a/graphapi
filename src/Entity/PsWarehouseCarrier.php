<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWarehouseCarrier
 *
 * @ORM\Table(name="ps_warehouse_carrier", indexes={@ORM\Index(name="id_carrier", columns={"id_carrier"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class PsWarehouseCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrier;
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWarehouse;
}
