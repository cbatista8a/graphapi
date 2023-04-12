<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsWishlistProduct
 *
 * @ORM\Table(name="ps_wishlist_product")
 * @ORM\Entity
 */
class PsWishlistProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_wishlist_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWishlistProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_wishlist", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWishlist;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity;
    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $priority;
}
