<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPack
 *
 * @ORM\Table(name="ps_pack", indexes={@ORM\Index(name="product_item", columns={"id_product_item", "id_product_attribute_item"})})
 * @ORM\Entity
 */
class PsPack
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_pack", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductPack;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_item", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductItem;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute_item", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductAttributeItem;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $quantity = '1';
}
