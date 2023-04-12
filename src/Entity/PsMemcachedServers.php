<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsMemcachedServers
 *
 * @ORM\Table(name="ps_memcached_servers")
 * @ORM\Entity
 */
class PsMemcachedServers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_memcached_server", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMemcachedServer;
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=254, nullable=false)
     */
    private $ip;
    /**
     * @var int
     *
     * @ORM\Column(name="port", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $port;
    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $weight;
}
