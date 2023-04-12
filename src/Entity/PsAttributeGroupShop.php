<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAttributeGroupShop
 *
 * @ORM\Table(name="ps_attribute_group_shop", indexes={@ORM\Index(name="IDX_DB30BAAC274A50A0", columns={"id_shop"}), @ORM\Index(name="IDX_DB30BAAC67A664FB", columns={"id_attribute_group"})})
 * @ORM\Entity
 */
class PsAttributeGroupShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttributeGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
