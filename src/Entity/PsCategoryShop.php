<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategoryShop
 *
 * @ORM\Table(name="ps_category_shop")
 * @ORM\Entity
 */
class PsCategoryShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
}
