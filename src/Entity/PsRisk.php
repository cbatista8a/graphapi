<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsRisk
 *
 * @ORM\Table(name="ps_risk")
 * @ORM\Entity
 */
class PsRisk
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_risk", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRisk;
    /**
     * @var bool
     *
     * @ORM\Column(name="percent", type="boolean", nullable=false)
     */
    private $percent;
    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true)
     */
    private $color;
}
