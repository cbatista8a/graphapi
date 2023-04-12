<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPageViewed
 *
 * @ORM\Table(name="ps_page_viewed")
 * @ORM\Entity
 */
class PsPageViewed
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_date_range", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDateRange;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="counter", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $counter;
}
