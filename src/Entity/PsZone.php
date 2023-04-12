<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsZone
 *
 * @ORM\Table(name="ps_zone")
 * @ORM\Entity
 */
class PsZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idZone;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
}
