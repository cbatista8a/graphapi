<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsImageType
 *
 * @ORM\Table(name="ps_image_type", indexes={@ORM\Index(name="image_type_name", columns={"name"})})
 * @ORM\Entity
 */
class PsImageType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image_type", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImageType;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $width;
    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $height;
    /**
     * @var bool
     *
     * @ORM\Column(name="products", type="boolean", nullable=false, options={"default"="1"})
     */
    private $products = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="categories", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categories = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="manufacturers", type="boolean", nullable=false, options={"default"="1"})
     */
    private $manufacturers = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="suppliers", type="boolean", nullable=false, options={"default"="1"})
     */
    private $suppliers = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="stores", type="boolean", nullable=false, options={"default"="1"})
     */
    private $stores = \true;
}
