<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsModuleCurrency
 *
 * @ORM\Table(name="ps_module_currency", indexes={@ORM\Index(name="id_module", columns={"id_module"})})
 * @ORM\Entity
 */
class PsModuleCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurrency;
}
