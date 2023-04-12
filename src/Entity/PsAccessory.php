<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsAccessory
 *
 * @ORM\Table(name="ps_accessory", indexes={@ORM\Index(name="accessory_product", columns={"id_product_1", "id_product_2"})})
 * @ORM\Entity
 */
class PsAccessory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_1", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct1;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_2", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct2;
}
