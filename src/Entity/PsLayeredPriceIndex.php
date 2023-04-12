<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredPriceIndex
 *
 * @ORM\Table(name="ps_layered_price_index", indexes={@ORM\Index(name="id_currency", columns={"id_currency"}), @ORM\Index(name="price_max", columns={"price_max"}), @ORM\Index(name="price_min", columns={"price_min"})})
 * @ORM\Entity
 */
class PsLayeredPriceIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;
    /**
     * @var string
     *
     * @ORM\Column(name="price_min", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $priceMin;
    /**
     * @var string
     *
     * @ORM\Column(name="price_max", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $priceMax;
}
