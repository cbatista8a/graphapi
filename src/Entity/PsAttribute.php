<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAttribute
 *
 * @ORM\Table(name="ps_attribute", indexes={@ORM\Index(name="attribute_group", columns={"id_attribute_group"})})
 * @ORM\Entity
 */
class PsAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     */
    private $idAttributeGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=false)
     */
    private $color;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;
}
