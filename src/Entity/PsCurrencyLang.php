<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCurrencyLang
 *
 * @ORM\Table(name="ps_currency_lang")
 * @ORM\Entity
 */
class PsCurrencyLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=255, nullable=false)
     */
    private $symbol;
    /**
     * @var string|null
     *
     * @ORM\Column(name="pattern", type="string", length=255, nullable=true)
     */
    private $pattern;
}
