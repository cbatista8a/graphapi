<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredFilterShop
 *
 * @ORM\Table(name="ps_layered_filter_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsLayeredFilterShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_layered_filter", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLayeredFilter;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
