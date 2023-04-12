<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsPagenotfound
 *
 * @ORM\Table(name="ps_pagenotfound", indexes={@ORM\Index(name="date_add", columns={"date_add"})})
 * @ORM\Entity
 */
class PsPagenotfound
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pagenotfound", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPagenotfound;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var string
     *
     * @ORM\Column(name="request_uri", type="string", length=256, nullable=false)
     */
    private $requestUri;
    /**
     * @var string
     *
     * @ORM\Column(name="http_referer", type="string", length=256, nullable=false)
     */
    private $httpReferer;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
