<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsGsitemapSitemap
 *
 * @ORM\Table(name="ps_gsitemap_sitemap")
 * @ORM\Entity
 */
class PsGsitemapSitemap
{
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $link;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '0';
}
