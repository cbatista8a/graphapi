<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsLang
 * @Type
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
    private $id;
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

    /**
     * @Field
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @Field
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PsLang
     */
    public function setName(string $name): PsLang
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return PsLang
     */
    public function setActive(bool $active): PsLang
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     * @return PsLang
     */
    public function setIsoCode(string $isoCode): PsLang
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     * @return PsLang
     */
    public function setLanguageCode(string $languageCode): PsLang
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return PsLang
     */
    public function setLocale(string $locale): PsLang
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getDateFormatLite(): string
    {
        return $this->dateFormatLite;
    }

    /**
     * @param string $dateFormatLite
     * @return PsLang
     */
    public function setDateFormatLite(string $dateFormatLite): PsLang
    {
        $this->dateFormatLite = $dateFormatLite;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getDateFormatFull(): string
    {
        return $this->dateFormatFull;
    }

    /**
     * @param string $dateFormatFull
     * @return PsLang
     */
    public function setDateFormatFull(string $dateFormatFull): PsLang
    {
        $this->dateFormatFull = $dateFormatFull;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isRtl(): bool
    {
        return $this->isRtl;
    }

    /**
     * @param bool $isRtl
     * @return PsLang
     */
    public function setIsRtl(bool $isRtl): PsLang
    {
        $this->isRtl = $isRtl;
        return $this;
    }


}
