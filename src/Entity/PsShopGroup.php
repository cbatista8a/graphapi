<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsShopGroup
 *
 * @ORM\Table(name="ps_shop_group")
 * @ORM\Entity
 */
class PsShopGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShopGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_customer", type="boolean", nullable=false)
     */
    private $shareCustomer;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_order", type="boolean", nullable=false)
     */
    private $shareOrder;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_stock", type="boolean", nullable=false)
     */
    private $shareStock;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;
}
