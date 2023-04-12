<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSpecificPriceRule
 *
 * @ORM\Table(name="ps_specific_price_rule", indexes={@ORM\Index(name="id_product", columns={"id_shop", "id_currency", "id_country", "id_group", "from_quantity", "from", "to"})})
 * @ORM\Entity
 */
class PsSpecificPriceRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPriceRule;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="from_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fromQuantity;
    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $price;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $reduction;
    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false, options={"default"="1"})
     */
    private $reductionTax = \true;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_type", type="string", length=0, nullable=false)
     */
    private $reductionType;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from", type="datetime", nullable=false)
     */
    private $from;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to", type="datetime", nullable=false)
     */
    private $to;
}
