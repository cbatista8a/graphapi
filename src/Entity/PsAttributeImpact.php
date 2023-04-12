<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAttributeImpact
 *
 * @ORM\Table(name="ps_attribute_impact", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_attribute"})})
 * @ORM\Entity
 */
class PsAttributeImpact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_impact", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttributeImpact;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAttribute;
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $weight;
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;
}
