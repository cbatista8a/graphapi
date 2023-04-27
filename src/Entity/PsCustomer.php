<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomer
 * @Type
 * @ORM\Table(name="ps_customer", indexes={@ORM\Index(name="id_customer_passwd", columns={"id_customer", "passwd"}), @ORM\Index(name="id_shop_group", columns={"id_shop_group"}), @ORM\Index(name="id_gender", columns={"id_gender"}), @ORM\Index(name="customer_login", columns={"email", "passwd"}), @ORM\Index(name="customer_email", columns={"email"}), @ORM\Index(name="id_shop", columns={"id_shop", "date_add"})})
 * @ORM\Entity
 */
class PsCustomer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';

    /**
     * @ORM\ManyToOne(targetEntity="PsShop")
     * @ORM\JoinColumn(name="id_shop", referencedColumnName="id_shop")
     */
    private PsShop $shop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_gender", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGender;
    /**
     * @var int
     *
     * @ORM\Column(name="id_default_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idDefaultGroup = '1';

    /**
     * @ORM\ManyToOne(targetEntity="PsLang")
     * @ORM\JoinColumn(name="id_lang", referencedColumnName="id_lang")
     */
    private PsLang $lang;


    /**
     * @var Collection<int, PsAddress>
     * @ORM\OneToMany(targetEntity="PsAddress", mappedBy="customer")
     */
    private Collection $addresses;
    /**
     * @var int
     *
     * @ORM\Column(name="id_risk", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idRisk = '1';
    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;
    /**
     * @var string|null
     *
     * @ORM\Column(name="siret", type="string", length=14, nullable=true)
     */
    private $siret;
    /**
     * @var string|null
     *
     * @ORM\Column(name="ape", type="string", length=5, nullable=true)
     */
    private $ape;
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;
    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=false)
     */
    private $passwd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;
    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=15, nullable=true)
     */
    private $ipRegistrationNewsletter;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="newsletter_date_add", type="datetime", nullable=true)
     */
    private $newsletterDateAdd;
    /**
     * @var bool
     *
     * @ORM\Column(name="optin", type="boolean", nullable=false)
     */
    private $optin = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=128, nullable=true)
     */
    private $website;
    /**
     * @var string
     *
     * @ORM\Column(name="outstanding_allow_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $outstandingAllowAmount = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="show_public_prices", type="boolean", nullable=false)
     */
    private $showPublicPrices = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="max_payment_days", type="integer", nullable=false, options={"default"="60","unsigned"=true})
     */
    private $maxPaymentDays = '60';
    /**
     * @var string
     *
     * @ORM\Column(name="secure_key", type="string", length=32, nullable=false, options={"default"="-1"})
     */
    private $secureKey = '-1';
    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_guest", type="boolean", nullable=false)
     */
    private $isGuest = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var string|null
     *
     * @ORM\Column(name="reset_password_token", type="string", length=40, nullable=true)
     */
    private $resetPasswordToken;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reset_password_validity", type="datetime", nullable=true)
     */
    private $resetPasswordValidity;

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
     * @return PsAddress[]
     */
    public function getAddresses(): array
    {
        return $this->addresses->getValues();
    }

    /**
     * @param PsAddress $address
     * @return PsCustomer
     */
    public function addAddress(PsAddress $address): self
    {
        $this->addresses->add($address);
        return $this;
    }
}
