<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsConfigurationKpi
 *
 * @ORM\Table(name="ps_configuration_kpi", indexes={@ORM\Index(name="id_shop_group", columns={"id_shop_group"}), @ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsConfigurationKpi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_configuration_kpi", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfigurationKpi;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShopGroup;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
}
