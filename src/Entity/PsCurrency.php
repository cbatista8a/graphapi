<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCurrency
 * @Type
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
    private $id;
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
     * @return PsCurrency
     */
    public function setName(string $name): PsCurrency
    {
        $this->name = $name;
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
     * @return PsCurrency
     */
    public function setIsoCode(string $isoCode): PsCurrency
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getNumericIsoCode(): ?string
    {
        return $this->numericIsoCode;
    }

    /**
     * @param string $numericIsoCode
     * @return PsCurrency
     */
    public function setNumericIsoCode(string $numericIsoCode): PsCurrency
    {
        $this->numericIsoCode = $numericIsoCode;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @param int $precision
     * @return PsCurrency
     */
    public function setPrecision(int $precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getConversionRate(): string
    {
        return $this->conversionRate;
    }

    /**
     * @param string $conversionRate
     * @return PsCurrency
     */
    public function setConversionRate(string $conversionRate): PsCurrency
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return PsCurrency
     */
    public function setDeleted(bool $deleted)
    {
        $this->deleted = $deleted;
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
     * @return PsCurrency
     */
    public function setActive(bool $active): PsCurrency
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * @param bool $unofficial
     * @return PsCurrency
     */
    public function setUnofficial(bool $unofficial)
    {
        $this->unofficial = $unofficial;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isModified()
    {
        return $this->modified;
    }

    /**
     * @param bool $modified
     * @return PsCurrency
     */
    public function setModified(bool $modified)
    {
        $this->modified = $modified;
        return $this;
    }


}
