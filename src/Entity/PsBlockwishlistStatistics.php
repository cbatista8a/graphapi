<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsBlockwishlistStatistics
 *
 * @ORM\Table(name="ps_blockwishlist_statistics")
 * @ORM\Entity
 */
class PsBlockwishlistStatistics
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_statistics", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatistics;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCart;
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
}
