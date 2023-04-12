<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsEmailsubscription
 *
 * @ORM\Table(name="ps_emailsubscription")
 * @ORM\Entity
 */
class PsEmailsubscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="newsletter_date_add", type="datetime", nullable=true)
     */
    private $newsletterDateAdd;
    /**
     * @var string
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=15, nullable=false)
     */
    private $ipRegistrationNewsletter;
    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true)
     */
    private $httpReferer;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     */
    private $idLang = '0';
}
