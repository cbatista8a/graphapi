<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsDelivery
 *
 * @ORM\Table(name="ps_delivery", indexes={@ORM\Index(name="id_range_price", columns={"id_range_price"}), @ORM\Index(name="id_carrier", columns={"id_carrier", "id_zone"}), @ORM\Index(name="id_range_weight", columns={"id_range_weight"}), @ORM\Index(name="id_zone", columns={"id_zone"})})
 * @ORM\Entity
 */
class PsDelivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_delivery", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDelivery;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShopGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_range_price", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idRangePrice;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_range_weight", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idRangeWeight;
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idZone;
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;
}
