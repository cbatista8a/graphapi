<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsDateRange
 *
 * @ORM\Table(name="ps_date_range")
 * @ORM\Entity
 */
class PsDateRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_date_range", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDateRange;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_start", type="datetime", nullable=false)
     */
    private $timeStart;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_end", type="datetime", nullable=false)
     */
    private $timeEnd;
}
