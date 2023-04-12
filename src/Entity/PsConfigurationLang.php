<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsConfigurationLang
 *
 * @ORM\Table(name="ps_configuration_lang")
 * @ORM\Entity
 */
class PsConfigurationLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_configuration", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConfiguration;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=true)
     */
    private $dateUpd;
}
