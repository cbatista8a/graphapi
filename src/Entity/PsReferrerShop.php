<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsReferrerShop
 *
 * @ORM\Table(name="ps_referrer_shop")
 * @ORM\Entity
 */
class PsReferrerShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_referrer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idReferrer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_visitors", type="integer", nullable=true)
     */
    private $cacheVisitors;
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_visits", type="integer", nullable=true)
     */
    private $cacheVisits;
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_pages", type="integer", nullable=true)
     */
    private $cachePages;
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_registrations", type="integer", nullable=true)
     */
    private $cacheRegistrations;
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_orders", type="integer", nullable=true)
     */
    private $cacheOrders;
    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_sales", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $cacheSales;
    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_reg_rate", type="decimal", precision=5, scale=4, nullable=true)
     */
    private $cacheRegRate;
    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_order_rate", type="decimal", precision=5, scale=4, nullable=true)
     */
    private $cacheOrderRate;
}
