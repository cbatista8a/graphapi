<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsConditionAdvice
 *
 * @ORM\Table(name="ps_condition_advice")
 * @ORM\Entity
 */
class PsConditionAdvice
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
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdvice;
    /**
     * @var bool
     *
     * @ORM\Column(name="display", type="boolean", nullable=false)
     */
    private $display = '0';
}
