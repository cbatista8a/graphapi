<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsConnections
 *
 * @ORM\Table(name="ps_connections", indexes={@ORM\Index(name="id_page", columns={"id_page"}), @ORM\Index(name="date_add", columns={"date_add"}), @ORM\Index(name="id_guest", columns={"id_guest"})})
 * @ORM\Entity
 */
class PsConnections
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConnections;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGuest;
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPage;
    /**
     * @var int|null
     *
     * @ORM\Column(name="ip_address", type="bigint", nullable=true)
     */
    private $ipAddress;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true)
     */
    private $httpReferer;
}
