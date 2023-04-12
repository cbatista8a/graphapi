<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsTranslation
 *
 * @ORM\Table(name="ps_translation", indexes={@ORM\Index(name="IDX_ADEBEB36BA299860", columns={"id_lang"}), @ORM\Index(name="key", columns={"domain"})})
 * @ORM\Entity
 */
class PsTranslation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_translation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTranslation;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="text", length=65535, nullable=false)
     */
    private $key;
    /**
     * @var string
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=false)
     */
    private $translation;
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=80, nullable=false)
     */
    private $domain;
    /**
     * @var string|null
     *
     * @ORM\Column(name="theme", type="string", length=32, nullable=true)
     */
    private $theme;
}
