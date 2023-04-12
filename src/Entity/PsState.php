<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsState
 *
 * @ORM\Table(name="ps_state", indexes={@ORM\Index(name="id_country", columns={"id_country"}), @ORM\Index(name="id_zone", columns={"id_zone"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idState;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsCountry",inversedBy="idCountry")
     */
    private $idCountry;
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsZone",inversedBy="idZone")
     */
    private $idZone;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=7, nullable=false)
     */
    private $isoCode;
    /**
     * @var int
     *
     * @ORM\Column(name="tax_behavior", type="smallint", nullable=false)
     */
    private $taxBehavior = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
}
