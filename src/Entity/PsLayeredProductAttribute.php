<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredProductAttribute
 *
 * @ORM\Table(name="ps_layered_product_attribute", uniqueConstraints={@ORM\UniqueConstraint(name="id_attribute_group", columns={"id_attribute_group", "id_attribute", "id_product", "id_shop"})})
 * @ORM\Entity
 */
class PsLayeredProductAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
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
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAttributeGroup = '0';
}
