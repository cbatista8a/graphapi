<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsHomesliderSlides
 *
 * @ORM\Table(name="ps_homeslider_slides")
 * @ORM\Entity
 */
class PsHomesliderSlides
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_homeslider_slides", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHomesliderSlides;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
}
