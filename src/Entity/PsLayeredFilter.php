<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredFilter
 *
 * @ORM\Table(name="ps_layered_filter")
 * @ORM\Entity
 */
class PsLayeredFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_layered_filter", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLayeredFilter;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="filters", type="text", length=0, nullable=true)
     */
    private $filters;
    /**
     * @var int
     *
     * @ORM\Column(name="n_categories", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nCategories;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
