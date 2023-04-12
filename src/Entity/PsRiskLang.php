<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsRiskLang
 *
 * @ORM\Table(name="ps_risk_lang", indexes={@ORM\Index(name="id_risk", columns={"id_risk"})})
 * @ORM\Entity
 */
class PsRiskLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_risk", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRisk;
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
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;
}
