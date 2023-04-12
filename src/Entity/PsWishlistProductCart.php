<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWishlistProductCart
 *
 * @ORM\Table(name="ps_wishlist_product_cart")
 * @ORM\Entity
 */
class PsWishlistProductCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_wishlist_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWishlistProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
