<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsTimezone
 *
 * @ORM\Table(name="ps_timezone")
 * @ORM\Entity
 */
class PsTimezone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_timezone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTimezone;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;
}
