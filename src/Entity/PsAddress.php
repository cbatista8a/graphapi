<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * PsAddress
 *
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
    private $id_address;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsCountry")
     * @JoinColumn(name="id_country", referencedColumnName="id")
     */
    private $id_country;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_state", type="integer", nullable=true, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsState",inversedBy="idState")
     */
    private $id_state;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\ManyToOne(targetEntity="PsCustomer",inversedBy="idCustomer")
     */
    private $id_customer = '0';
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $date_add;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $date_upd;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->id_country;
    }
}
