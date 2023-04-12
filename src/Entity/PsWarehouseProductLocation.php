<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsWarehouseProductLocation
 *
 * @ORM\Table(name="ps_warehouse_product_location", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_product_attribute", "id_warehouse"})})
 * @ORM\Entity
 */
class PsWarehouseProductLocation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse_product_location", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWarehouseProductLocation;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;
    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=64, nullable=true)
     */
    private $location;
}
