<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsImage
 *
 * @ORM\Table(name="ps_image", uniqueConstraints={@ORM\UniqueConstraint(name="idx_product_image", columns={"id_image", "id_product", "cover"}), @ORM\UniqueConstraint(name="id_product_cover", columns={"id_product", "cover"})}, indexes={@ORM\Index(name="image_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var bool|null
     *
     * @ORM\Column(name="cover", type="boolean", nullable=true)
     */
    private $cover;
}
