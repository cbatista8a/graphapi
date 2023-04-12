<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsTabAdvice
 *
 * @ORM\Table(name="ps_tab_advice")
 * @ORM\Entity
 */
class PsTabAdvice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTab;
    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdvice;
}
