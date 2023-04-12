<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsWishlist
 *
 * @ORM\Table(name="ps_wishlist")
 * @ORM\Entity
 */
class PsWishlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_wishlist", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWishlist;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=64, nullable=false)
     */
    private $token;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var int|null
     *
     * @ORM\Column(name="counter", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $counter;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var int|null
     *
     * @ORM\Column(name="default", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $default = '0';
}
