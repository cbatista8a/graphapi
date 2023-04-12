<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategoryGroup
 *
 * @ORM\Table(name="ps_category_group", indexes={@ORM\Index(name="id_group", columns={"id_group"}), @ORM\Index(name="id_category", columns={"id_category"})})
 * @ORM\Entity
 */
class PsCategoryGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;
}
