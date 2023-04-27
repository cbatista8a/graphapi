<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsState
 * @Type
 * @ORM\Table(name="ps_state", indexes={@ORM\Index(name="id_country", columns={"id_country"}), @ORM\Index(name="id_zone", columns={"id_zone"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="PsCountry",inversedBy="states")
     * @ORM\JoinColumn(name="id_country", referencedColumnName="id_country")
     */
    private PsCountry $country;
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsZone",inversedBy="idZone")
     */
    private $id_zone;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=7, nullable=false)
     */
    private $iso_code;
    /**
     * @var int
     *
     * @ORM\Column(name="tax_behavior", type="smallint", nullable=false)
     */
    private $tax_behavior = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = 0;

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
     * @return PsCountry
     */
    public function getCountry(): PsCountry
    {
        return $this->country;
    }

    /**
     * @param PsCountry $country
     * @return PsState
     */
    public function setCountry(PsCountry $country): PsState
    {
        $this->country = $country;
        return $this;
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
     * @return PsState
     */
    public function setIdZone(int $id_zone): PsState
    {
        $this->id_zone = $id_zone;
        return $this;
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
     * @return PsState
     */
    public function setName(string $name): PsState
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
        return $this->iso_code;
    }

    /**
     * @param string $iso_code
     * @return PsState
     */
    public function setIsoCode(string $iso_code): PsState
    {
        $this->iso_code = $iso_code;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getTaxBehavior(): int
    {
        return $this->tax_behavior;
    }

    /**
     * @param int $tax_behavior
     * @return PsState
     */
    public function setTaxBehavior(int $tax_behavior): PsState
    {
        $this->tax_behavior = $tax_behavior;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isActive(): bool
    {
        return (bool)$this->active;
    }

    /**
     * @param bool $active
     * @return PsState
     */
    public function setActive(bool $active): PsState
    {
        $this->active = $active;
        return $this;
    }




}
