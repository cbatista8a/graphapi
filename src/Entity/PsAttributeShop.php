<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAttributeShop
 *
 * @ORM\Table(name="ps_attribute_shop", indexes={@ORM\Index(name="IDX_A7DD8E67274A50A0", columns={"id_shop"}), @ORM\Index(name="IDX_A7DD8E677A4F53DC", columns={"id_attribute"})})
 * @ORM\Entity
 */
class PsAttributeShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
