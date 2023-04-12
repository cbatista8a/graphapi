<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductAttributeImage
 *
 * @ORM\Table(name="ps_product_attribute_image", indexes={@ORM\Index(name="id_image", columns={"id_image"})})
 * @ORM\Entity
 */
class PsProductAttributeImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImage;
}
