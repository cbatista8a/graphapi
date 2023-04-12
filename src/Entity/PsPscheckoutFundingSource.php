<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPscheckoutFundingSource
 *
 * @ORM\Table(name="ps_pscheckout_funding_source", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsPscheckoutFundingSource
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false)
     */
    private $position;
}
