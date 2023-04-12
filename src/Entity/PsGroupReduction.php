<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsGroupReduction
 *
 * @ORM\Table(name="ps_group_reduction", uniqueConstraints={@ORM\UniqueConstraint(name="id_group", columns={"id_group", "id_category"})})
 * @ORM\Entity
 */
class PsGroupReduction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_group_reduction", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupReduction;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCategory;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=4, nullable=false)
     */
    private $reduction;
}
