<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredIndexableFeature
 *
 * @ORM\Table(name="ps_layered_indexable_feature")
 * @ORM\Entity
 */
class PsLayeredIndexableFeature
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeature;
    /**
     * @var bool
     *
     * @ORM\Column(name="indexable", type="boolean", nullable=false)
     */
    private $indexable = '0';
}
