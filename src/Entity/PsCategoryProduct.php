<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategoryProduct
 *
 * @ORM\Table(name="ps_category_product", indexes={@ORM\Index(name="id_category", columns={"id_category", "position"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsCategoryProduct
{
    /**
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="PsCategory")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     */
    private PsCategory $category;

    /**
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="PsProduct")
     * @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     */
    private PsProduct $product;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = 1;
}
