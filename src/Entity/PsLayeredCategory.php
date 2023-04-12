<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredCategory
 *
 * @ORM\Table(name="ps_layered_category", indexes={@ORM\Index(name="id_category", columns={"id_category", "type"}), @ORM\Index(name="id_category_shop", columns={"id_category", "id_shop", "type", "id_value", "position"})})
 * @ORM\Entity
 */
class PsLayeredCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_layered_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLayeredCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCategory;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_value", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idValue = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position;
    /**
     * @var int
     *
     * @ORM\Column(name="filter_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filterType = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="filter_show_limit", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filterShowLimit = '0';
}
