<?php
/**
 * Copyright since 2020 CubaDevOps
 *
 * @Author : Carlos Batista <carlos.batista@cubadevops.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use PrestaShop\PrestaShop\Core\Crypto\Hashing;

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
     * @var \DateTimeImmutable|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;
    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=15, nullable=true)
     */
    private $ipRegistrationNewsletter;
    /**
     * @var \DateTimeImmutable|null
     *
     * @ORM\Column(name="newsletter_date_add", type="datetime", nullable=true)
     */
    private $newsletterDateAdd;
    /**
     * @var bool
     *
     * @ORM\Column(name="optin", type="boolean", nullable=false)
     */
    private $optin = 0;
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
    private $showPublicPrices = 0;
    /**
     * @var int
     *
     * @ORM\Column(name="max_payment_days", type="integer", nullable=false, options={"default"="60","unsigned"=true})
     */
    private $maxPaymentDays = 60;
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
    private $active = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_guest", type="boolean", nullable=false)
     */
    private $isGuest = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = 0;
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

    /**
     * @Field
     * @return int
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * @param int $idShopGroup
     * @return PsCustomer
     */
    public function setIdShopGroup(int $idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;
        return $this;
    }

    /**
     * @Field
     * @return PsShop
     */
    public function getShop(): PsShop
    {
        return $this->shop;
    }

    /**
     * @param PsShop $shop
     * @return PsCustomer
     */
    public function setShop(PsShop $shop): PsCustomer
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdGender(): int
    {
        return $this->idGender;
    }

    /**
     * @param int $idGender
     * @return PsCustomer
     */
    public function setIdGender(int $idGender): PsCustomer
    {
        $this->idGender = $idGender;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdDefaultGroup()
    {
        return $this->idDefaultGroup;
    }

    /**
     * @param int $idDefaultGroup
     * @return PsCustomer
     */
    public function setIdDefaultGroup(int $idDefaultGroup)
    {
        $this->idDefaultGroup = $idDefaultGroup;
        return $this;
    }

    /**
     * @Field
     * @return PsLang
     */
    public function getLang(): PsLang
    {
        return $this->lang;
    }

    /**
     * @param PsLang $lang
     * @return PsCustomer
     */
    public function setLang(PsLang $lang): PsCustomer
    {
        $this->lang = $lang;
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
     * @param string|null $company
     * @return PsCustomer
     */
    public function setCompany(?string $company): PsCustomer
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * @param string|null $siret
     * @return PsCustomer
     */
    public function setSiret(?string $siret): PsCustomer
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getApe(): ?string
    {
        return $this->ape;
    }

    /**
     * @param string|null $ape
     * @return PsCustomer
     */
    public function setApe(?string $ape): PsCustomer
    {
        $this->ape = $ape;
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
     * @return PsCustomer
     */
    public function setFirstname(string $firstname): PsCustomer
    {
        $this->firstname = $firstname;
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
     * @return PsCustomer
     */
    public function setLastname(string $lastname): PsCustomer
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PsCustomer
     */
    public function setEmail(string $email): PsCustomer
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable|null
     */
    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    /**
     * @param \DateTimeImmutable|null $birthday
     * @return PsCustomer
     */
    public function setBirthday(?\DateTimeImmutable $birthday): PsCustomer
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param bool $newsletter
     * @return PsCustomer
     */
    public function setNewsletter(bool $newsletter)
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getOptin()
    {
        return $this->optin;
    }

    /**
     * @param bool $optin
     * @return PsCustomer
     */
    public function setOptin(bool $optin)
    {
        $this->optin = $optin;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     * @return PsCustomer
     */
    public function setWebsite(?string $website): PsCustomer
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getShowPublicPrices()
    {
        return $this->showPublicPrices;
    }

    /**
     * @param bool $showPublicPrices
     * @return PsCustomer
     */
    public function setShowPublicPrices(bool $showPublicPrices): PsCustomer
    {
        $this->showPublicPrices = $showPublicPrices;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     * @return PsCustomer
     */
    public function setNote(?string $note): PsCustomer
    {
        $this->note = $note;
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
     * @return PsCustomer
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
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * @param bool $isGuest
     * @return PsCustomer
     */
    public function setIsGuest(bool $isGuest)
    {
        $this->isGuest = $isGuest;
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
     * @return PsCustomer
     */
    public function setDeleted(bool $deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateAdd(): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromMutable($this->date_add);
    }

    /**
     * @return PsCustomer
     */
    public function setDateAdd(): PsCustomer
    {
        $this->date_add = new \DateTimeImmutable();
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateUpd(): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromMutable($this->date_upd);
    }

    /**
     * @return PsCustomer
     */
    public function setDateUpd(): PsCustomer
    {
        $this->date_upd = new \DateTimeImmutable();
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getResetPasswordToken(): ?string
    {
        return $this->resetPasswordToken;
    }

    /**
     * @param string $resetPasswordToken
     * @return PsCustomer
     */
    public function setResetPasswordToken(string $resetPasswordToken): PsCustomer
    {
        $this->resetPasswordToken = $resetPasswordToken;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable|null
     */
    public function getResetPasswordValidity(): ?\DateTimeImmutable
    {
        return \DateTimeImmutable::createFromMutable($this->resetPasswordValidity);
    }

    /**
     * @param \DateTimeImmutable $resetPasswordValidity
     * @return PsCustomer
     */
    public function setResetPasswordValidity(\DateTimeImmutable $resetPasswordValidity): PsCustomer
    {
        $this->resetPasswordValidity = $resetPasswordValidity;
        return $this;
    }

    /**
     * @param string $hashed_passwd
     * @return PsCustomer
     */
    public function setPasswd(string $hashed_passwd): PsCustomer
    {
        $this->passwd = $hashed_passwd;
        return $this;
    }

    /**
     * the hashed password
     * @return string
     */
    public function getPassword(): string
    {
        return $this->passwd;
    }

    public function verifyPasswd(string $hashed_passwd): bool
    {
        return $this->passwd == $hashed_passwd;
    }


}
