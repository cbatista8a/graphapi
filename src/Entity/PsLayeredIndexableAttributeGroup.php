<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredIndexableAttributeGroup
 *
 * @ORM\Table(name="ps_layered_indexable_attribute_group")
 * @ORM\Entity
 */
class PsLayeredIndexableAttributeGroup
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
     * @ORM\Column(name="indexable", type="boolean", nullable=false)
     */
    private $indexable = '0';
}
