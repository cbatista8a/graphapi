<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsRangeWeight
 *
 * @ORM\Table(name="ps_range_weight", uniqueConstraints={@ORM\UniqueConstraint(name="id_carrier", columns={"id_carrier", "delimiter1", "delimiter2"})})
 * @ORM\Entity
 */
class PsRangeWeight
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_range_weight", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRangeWeight;
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var string
     *
     * @ORM\Column(name="delimiter1", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $delimiter1;
    /**
     * @var string
     *
     * @ORM\Column(name="delimiter2", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $delimiter2;
}
