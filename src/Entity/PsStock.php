<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsStock
 *
 * @ORM\Table(name="ps_stock", indexes={@ORM\Index(name="id_warehouse", columns={"id_warehouse"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStock;
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;
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
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;
    /**
     * @var string|null
     *
     * @ORM\Column(name="ean13", type="string", length=13, nullable=true)
     */
    private $ean13;
    /**
     * @var string|null
     *
     * @ORM\Column(name="isbn", type="string", length=32, nullable=true)
     */
    private $isbn;
    /**
     * @var string|null
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=true)
     */
    private $upc;
    /**
     * @var string|null
     *
     * @ORM\Column(name="mpn", type="string", length=40, nullable=true)
     */
    private $mpn;
    /**
     * @var int
     *
     * @ORM\Column(name="physical_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $physicalQuantity;
    /**
     * @var int
     *
     * @ORM\Column(name="usable_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $usableQuantity;
    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';
}
