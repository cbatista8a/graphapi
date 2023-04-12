<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsConnectionsPage
 *
 * @ORM\Table(name="ps_connections_page")
 * @ORM\Entity
 */
class PsConnectionsPage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConnections;
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPage;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_start", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timeStart;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_end", type="datetime", nullable=true)
     */
    private $timeEnd;
}
