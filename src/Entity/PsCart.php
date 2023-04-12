<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCart
 *
 * @ORM\Table(name="ps_cart", indexes={@ORM\Index(name="id_carrier", columns={"id_carrier"}), @ORM\Index(name="id_shop", columns={"id_shop", "date_add"}), @ORM\Index(name="id_guest", columns={"id_guest"}), @ORM\Index(name="id_address_invoice", columns={"id_address_invoice"}), @ORM\Index(name="id_currency", columns={"id_currency"}), @ORM\Index(name="id_address_delivery", columns={"id_address_delivery"}), @ORM\Index(name="id_shop_2", columns={"id_shop", "date_upd"}), @ORM\Index(name="id_lang", columns={"id_lang"}), @ORM\Index(name="cart_customer", columns={"id_customer"}), @ORM\Index(name="id_shop_group", columns={"id_shop_group"})})
 * @ORM\Entity
 */
class PsCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var string
     *
     * @ORM\Column(name="delivery_option", type="text", length=65535, nullable=false)
     */
    private $deliveryOption;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddressDelivery;
    /**
     * @var int
     *
     * @ORM\Column(name="id_address_invoice", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddressInvoice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGuest;
    /**
     * @var string
     *
     * @ORM\Column(name="secure_key", type="string", length=32, nullable=false, options={"default"="-1"})
     */
    private $secureKey = '-1';
    /**
     * @var bool
     *
     * @ORM\Column(name="recyclable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $recyclable = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="gift", type="boolean", nullable=false)
     */
    private $gift = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="gift_message", type="text", length=65535, nullable=true)
     */
    private $giftMessage;
    /**
     * @var bool
     *
     * @ORM\Column(name="mobile_theme", type="boolean", nullable=false)
     */
    private $mobileTheme = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="allow_seperated_package", type="boolean", nullable=false)
     */
    private $allowSeperatedPackage = '0';
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
     * @ORM\Column(name="checkout_session_data", type="text", length=16777215, nullable=true)
     */
    private $checkoutSessionData;
}
