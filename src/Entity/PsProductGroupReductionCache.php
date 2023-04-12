<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductGroupReductionCache
 *
 * @ORM\Table(name="ps_product_group_reduction_cache")
 * @ORM\Entity
 */
class PsProductGroupReductionCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=4, nullable=false)
     */
    private $reduction;
}
