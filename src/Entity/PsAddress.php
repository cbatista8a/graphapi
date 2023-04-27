<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * PsAddress
 *@Type
 * @ORM\Table(name="ps_address", indexes={@ORM\Index(name="id_manufacturer", columns={"id_manufacturer"}), @ORM\Index(name="id_state", columns={"id_state"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"}), @ORM\Index(name="id_country", columns={"id_country"}), @ORM\Index(name="id_supplier", columns={"id_supplier"}), @ORM\Index(name="address_customer", columns={"id_customer"})})
 * @ORM\Entity
 */
class PsAddress
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_address", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="PsCountry")
     * @JoinColumn(name="id_country", referencedColumnName="id_country")
     */
    private PsCountry $country;

    /**
     *
     * @ORM\ManyToOne(targetEntity="PsState")
     * @JoinColumn(name="id_state", referencedColumnName="id_state")
     */
    private PsState $state;

    /**
     * @ORM\ManyToOne(targetEntity="PsCustomer",inversedBy="addresses")
     * @JoinColumn(name="id_customer", referencedColumnName="id_customer")
     */
    private PsCustomer $customer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_manufacturer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsManufacturer",inversedBy="idManufacturer")
     */
    private $id_manufacturer = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsSupplier",inversedBy="idSupplier")
     */
    private $id_supplier = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsWarehouse",inversedBy="idWarehouse")
     */
    private $id_warehouse = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=32, nullable=false)
     */
    private $alias;
    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;
    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=128, nullable=false)
     */
    private $address1;
    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=128, nullable=true)
     */
    private $address2;
    /**
     * @var string|null
     *
     * @ORM\Column(name="postcode", type="string", length=12, nullable=true)
     */
    private $postcode;
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=64, nullable=false)
     */
    private $city;
    /**
     * @var string|null
     *
     * @ORM\Column(name="other", type="text", length=65535, nullable=true)
     */
    private $other;
    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=true)
     */
    private $phone;
    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_mobile", type="string", length=32, nullable=true)
     */
    private $phone_mobile;
    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_number", type="string", length=32, nullable=true)
     */
    private $vat_number;
    /**
     * @var string|null
     *
     * @ORM\Column(name="dni", type="string", length=16, nullable=true)
     */
    private $dni;
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $date_add;
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $date_upd;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @Field
     * @return PsCountry
     */
    public function getCountry(): PsCountry
    {
        return $this->country;
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
     * @return PsCustomer
     */
    public function getCustomer(): PsCustomer
    {
        return $this->customer;
    }

    /**
     * @param PsCustomer $customer
     * @return PsAddress
     */
    public function setCustomer(PsCustomer $customer): PsAddress
    {
        $customer->addAddress($this);
        $this->customer = $customer;
        return $this;
    }

    /**
     * @Field
     * @return PsState
     */
    public function getState(): PsState
    {
        return $this->state;
    }

    /**
     * @param PsState $state
     * @return PsAddress
     */
    public function setState(PsState $state): PsAddress
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdManufacturer()
    {
        return $this->id_manufacturer;
    }

    /**
     * @param int $id_manufacturer
     * @return PsAddress
     */
    public function setIdManufacturer(int $id_manufacturer): PsAddress
    {
        $this->id_manufacturer = $id_manufacturer;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdSupplier()
    {
        return $this->id_supplier;
    }

    /**
     * @param int $id_supplier
     * @return PsAddress
     */
    public function setIdSupplier(int $id_supplier): PsAddress
    {
        $this->id_supplier = $id_supplier;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdWarehouse()
    {
        return $this->id_warehouse;
    }

    /**
     * @param int $id_warehouse
     * @return PsAddress
     */
    public function setIdWarehouse(int $id_warehouse): PsAddress
    {
        $this->id_warehouse = $id_warehouse;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return PsAddress
     */
    public function setAlias(string $alias): PsAddress
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return PsAddress
     */
    public function setCompany(string $company): PsAddress
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return PsAddress
     */
    public function setLastname(string $lastname): PsAddress
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return PsAddress
     */
    public function setFirstname(string $firstname): PsAddress
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return PsAddress
     */
    public function setAddress1(string $address1): PsAddress
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return PsAddress
     */
    public function setAddress2(string $address2): PsAddress
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return PsAddress
     */
    public function setPostcode(string $postcode): PsAddress
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return PsAddress
     */
    public function setCity(string $city): PsAddress
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getOther(): ?string
    {
        return $this->other;
    }

    /**
     * @param string $other
     * @return PsAddress
     */
    public function setOther(string $other): PsAddress
    {
        $this->other = $other;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return PsAddress
     */
    public function setPhone(string $phone): PsAddress
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getPhoneMobile(): ?string
    {
        return $this->phone_mobile;
    }

    /**
     * @param string $phone_mobile
     * @return PsAddress
     */
    public function setPhoneMobile(string $phone_mobile): PsAddress
    {
        $this->phone_mobile = $phone_mobile;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vat_number;
    }

    /**
     * @param string $vat_number
     * @return PsAddress
     */
    public function setVatNumber(string $vat_number): PsAddress
    {
        $this->vat_number = $vat_number;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDni(): ?string
    {
        return $this->dni;
    }

    /**
     * @param string $dni
     * @return PsAddress
     */
    public function setDni(string $dni): PsAddress
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateAdd(): \DateTimeImmutable
    {
        return $this->date_add;
    }

    /**
     * @param \DateTimeImmutable $date_add
     * @return PsAddress
     */
    public function setDateAdd(\DateTimeImmutable $date_add): PsAddress
    {
        $this->date_add = $date_add;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateUpd(): \DateTimeImmutable
    {
        return $this->date_upd;
    }

    /**
     * @param \DateTimeImmutable $date_upd
     * @return PsAddress
     */
    public function setDateUpd(\DateTimeImmutable $date_upd): PsAddress
    {
        $this->date_upd = $date_upd;
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
     * @return PsAddress
     */
    public function setActive(bool $active): PsAddress
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return PsAddress
     */
    public function setDeleted(bool $deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }


}
