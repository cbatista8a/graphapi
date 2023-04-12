<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsAdvice
 *
 * @ORM\Table(name="ps_advice")
 * @ORM\Entity
 */
class PsAdvice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdvice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_advice", type="integer", nullable=false)
     */
    private $idPsAdvice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     */
    private $idTab;
    /**
     * @var string|null
     *
     * @ORM\Column(name="ids_tab", type="text", length=16777215, nullable=true)
     */
    private $idsTab;
    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="hide", type="boolean", nullable=false)
     */
    private $hide = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=0, nullable=false)
     */
    private $location;
    /**
     * @var string|null
     *
     * @ORM\Column(name="selector", type="string", length=255, nullable=true)
     */
    private $selector;
    /**
     * @var int
     *
     * @ORM\Column(name="start_day", type="integer", nullable=false)
     */
    private $startDay = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="stop_day", type="integer", nullable=false)
     */
    private $stopDay = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="weight", type="integer", nullable=true, options={"default"="1"})
     */
    private $weight = '1';
}
