<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsShop
 *
 * @ORM\Table(name="ps_shop", indexes={@ORM\Index(name="IDX_CBDFBB9EF5C9E40", columns={"id_shop_group"})})
 * @ORM\Entity
 */
class PsShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false)
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
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     */
    private $idCategory;
    /**
     * @var string
     *
     * @ORM\Column(name="theme_name", type="string", length=255, nullable=false)
     */
    private $themeName;
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
