<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductAttributeCombination
 *
 * @ORM\Table(name="ps_product_attribute_combination", indexes={@ORM\Index(name="id_product_attribute", columns={"id_product_attribute"})})
 * @ORM\Entity
 */
class PsProductAttributeCombination
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
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductAttribute;
}
