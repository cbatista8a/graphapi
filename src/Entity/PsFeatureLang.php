<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsFeatureLang
 *
 * @ORM\Table(name="ps_feature_lang", indexes={@ORM\Index(name="id_lang", columns={"id_lang", "name"})})
 * @ORM\Entity
 */
class PsFeatureLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeature;
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
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;
}
