<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOperatingSystem
 *
 * @ORM\Table(name="ps_operating_system")
 * @ORM\Entity
 */
class PsOperatingSystem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_operating_system", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOperatingSystem;
    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;
}
