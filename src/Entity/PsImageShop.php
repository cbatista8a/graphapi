<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsImageShop
 *
 * @ORM\Table(name="ps_image_shop", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_shop", "cover"})}, indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsImageShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="cover", type="boolean", nullable=true)
     */
    private $cover;
}
