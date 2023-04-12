<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWarehouseShop
 *
 * @ORM\Table(name="ps_warehouse_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class PsWarehouseShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWarehouse;
}
