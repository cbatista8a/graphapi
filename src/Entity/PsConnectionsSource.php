<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsConnectionsSource
 *
 * @ORM\Table(name="ps_connections_source", indexes={@ORM\Index(name="request_uri", columns={"request_uri"}), @ORM\Index(name="http_referer", columns={"http_referer"}), @ORM\Index(name="orderby", columns={"date_add"}), @ORM\Index(name="connections", columns={"id_connections"})})
 * @ORM\Entity
 */
class PsConnectionsSource
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections_source", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConnectionsSource;
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idConnections;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true)
     */
    private $httpReferer;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri", type="string", length=255, nullable=true)
     */
    private $requestUri;
    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
