<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductSale
 *
 * @ORM\Table(name="ps_product_sale", indexes={@ORM\Index(name="quantity", columns={"quantity"})})
 * @ORM\Entity
 */
class PsProductSale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="sale_nbr", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $saleNbr = '0';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="date", nullable=true)
     */
    private $dateUpd;
}
