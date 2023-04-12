<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCmsShop
 *
 * @ORM\Table(name="ps_cms_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsCmsShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCms;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
