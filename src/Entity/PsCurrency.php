<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCurrency
 *
 * @ORM\Table(name="ps_currency", indexes={@ORM\Index(name="currency_iso_code", columns={"iso_code"})})
 * @ORM\Entity
 */
class PsCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurrency;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false)
     */
    private $isoCode = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="numeric_iso_code", type="string", length=3, nullable=true)
     */
    private $numericIsoCode;
    /**
     * @var int
     *
     * @ORM\Column(name="precision", type="integer", nullable=false, options={"default"="6"})
     */
    private $precision = '6';
    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false)
     */
    private $conversionRate;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="unofficial", type="boolean", nullable=false)
     */
    private $unofficial = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="modified", type="boolean", nullable=false)
     */
    private $modified = '0';
}
