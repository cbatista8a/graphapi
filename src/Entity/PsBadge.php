<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsBadge
 *
 * @ORM\Table(name="ps_badge")
 * @ORM\Entity
 */
class PsBadge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBadge;
    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_badge", type="integer", nullable=false)
     */
    private $idPsBadge;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false)
     */
    private $idGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="group_position", type="integer", nullable=false)
     */
    private $groupPosition;
    /**
     * @var int
     *
     * @ORM\Column(name="scoring", type="integer", nullable=false)
     */
    private $scoring;
    /**
     * @var int|null
     *
     * @ORM\Column(name="awb", type="integer", nullable=true)
     */
    private $awb = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';
}
