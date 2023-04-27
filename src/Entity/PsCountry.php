<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCountry
 * @Type
 * @ORM\Table(name="ps_country", indexes={@ORM\Index(name="country_", columns={"id_zone"}), @ORM\Index(name="country_iso_code", columns={"iso_code"})})
 * @ORM\Entity
 */
class PsCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var Collection<int, PsState>
     * @ORM\OneToMany(targetEntity="PsState", mappedBy="country")
     */
    private Collection $states;
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsZone", inversedBy="idZone")
     */
    private $id_zone;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id_currency = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false)
     */
    private $iso_code;
    /**
     * @var int
     *
     * @ORM\Column(name="call_prefix", type="integer", nullable=false)
     */
    private $call_prefix = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="contains_states", type="boolean", nullable=false)
     */
    private $contains_states = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_identification_number", type="boolean", nullable=false)
     */
    private $need_identification_number = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_zip_code", type="boolean", nullable=false, options={"default"="1"})
     */
    private $need_zip_code = \true;
    /**
     * @var string
     *
     * @ORM\Column(name="zip_code_format", type="string", length=12, nullable=false)
     */
    private $zip_code_format = '';
    /**
     * @var bool
     *
     * @ORM\Column(name="display_tax_label", type="boolean", nullable=false)
     */
    private $display_tax_label;


    public function __construct()
    {
        $this->states = new ArrayCollection();
    }

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
     * @return int
     */
    public function getIdZone(): int
    {
        return $this->id_zone;
    }

    /**
     * @param int $id_zone
     * @return PsCountry
     */
    public function setIdZone(int $id_zone): PsCountry
    {
        $this->id_zone = $id_zone;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->id_currency;
    }

    /**
     * @param int $id_currency
     * @return PsCountry
     */
    public function setIdCurrency(int $id_currency)
    {
        $this->id_currency = $id_currency;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->iso_code;
    }

    /**
     * @param string $iso_code
     * @return PsCountry
     */
    public function setIsoCode(string $iso_code): PsCountry
    {
        $this->iso_code = $iso_code;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getCallPrefix()
    {
        return $this->call_prefix;
    }

    /**
     * @param string $call_prefix
     * @return PsCountry
     */
    public function setCallPrefix(string $call_prefix)
    {
        $this->call_prefix = $call_prefix;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return PsCountry
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getContainsStates()
    {
        return $this->contains_states;
    }

    /**
     * @param bool $contains_states
     * @return PsCountry
     */
    public function setContainsStates(bool $contains_states)
    {
        $this->contains_states = $contains_states;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getNeedIdentificationNumber()
    {
        return $this->need_identification_number;
    }

    /**
     * @param bool $need_identification_number
     * @return PsCountry
     */
    public function setNeedIdentificationNumber(bool $need_identification_number)
    {
        $this->need_identification_number = $need_identification_number;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function needZipCode(): bool
    {
        return $this->need_zip_code;
    }

    /**
     * @param bool $need_zip_code
     * @return PsCountry
     */
    public function setNeedZipCode(bool $need_zip_code): PsCountry
    {
        $this->need_zip_code = $need_zip_code;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getZipCodeFormat(): string
    {
        return $this->zip_code_format;
    }

    /**
     * @param string $zip_code_format
     * @return PsCountry
     */
    public function setZipCodeFormat(string $zip_code_format): PsCountry
    {
        $this->zip_code_format = $zip_code_format;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isDisplayTaxLabel(): bool
    {
        return $this->display_tax_label;
    }

    /**
     * @param bool $display_tax_label
     * @return PsCountry
     */
    public function setDisplayTaxLabel(bool $display_tax_label): PsCountry
    {
        $this->display_tax_label = $display_tax_label;
        return $this;
    }

    /**
     * @return PsState[]
     */
    public function getStates(): array
    {
        return $this->states->getValues();
    }

    /**
     * @param PsState $state
     * @return PsCountry
     */
    public function addState(PsState $state): self
    {
        $state->setCountry($this);
        $this->states->add($state);
        return $this;
    }


}
