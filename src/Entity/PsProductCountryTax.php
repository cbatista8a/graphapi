<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCountryTax
 *
 * @ORM\Table(name="ps_product_country_tax")
 * @ORM\Entity
 */
class PsProductCountryTax
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
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     */
    private $idTax;
}
