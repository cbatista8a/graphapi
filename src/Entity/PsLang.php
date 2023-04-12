<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLang
 *
 * @ORM\Table(name="ps_lang")
 * @ORM\Entity
 */
class PsLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=2, nullable=false)
     */
    private $isoCode;
    /**
     * @var string
     *
     * @ORM\Column(name="language_code", type="string", length=5, nullable=false)
     */
    private $languageCode;
    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=5, nullable=false)
     */
    private $locale;
    /**
     * @var string
     *
     * @ORM\Column(name="date_format_lite", type="string", length=32, nullable=false)
     */
    private $dateFormatLite;
    /**
     * @var string
     *
     * @ORM\Column(name="date_format_full", type="string", length=32, nullable=false)
     */
    private $dateFormatFull;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_rtl", type="boolean", nullable=false)
     */
    private $isRtl;
}
