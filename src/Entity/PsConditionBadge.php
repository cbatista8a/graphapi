<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsConditionBadge
 *
 * @ORM\Table(name="ps_condition_badge")
 * @ORM\Entity
 */
class PsConditionBadge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCondition;
    /**
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBadge;
}
