<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsAttributeGroup
 *
 * @ORM\Table(name="ps_attribute_group")
 * @ORM\Entity
 */
class PsAttributeGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttributeGroup;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_color_group", type="boolean", nullable=false)
     */
    private $isColorGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="group_type", type="string", length=255, nullable=false)
     */
    private $groupType;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;
}
