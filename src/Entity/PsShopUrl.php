<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsShopUrl
 *
 * @ORM\Table(name="ps_shop_url", indexes={@ORM\Index(name="IDX_279F19DA274A50A0", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsShopUrl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_url", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     */
    private $idShop;
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=150, nullable=false)
     */
    private $domain;
    /**
     * @var string
     *
     * @ORM\Column(name="domain_ssl", type="string", length=150, nullable=false)
     */
    private $domainSsl;
    /**
     * @var string
     *
     * @ORM\Column(name="physical_uri", type="string", length=64, nullable=false)
     */
    private $physicalUri;
    /**
     * @var string
     *
     * @ORM\Column(name="virtual_uri", type="string", length=64, nullable=false)
     */
    private $virtualUri;
    /**
     * @var bool
     *
     * @ORM\Column(name="main", type="boolean", nullable=false)
     */
    private $main;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
}
