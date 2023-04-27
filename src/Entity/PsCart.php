<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\___PHPSTORM_HELPERS\this;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Mutation;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCart
 * @Type
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
    private $id;

    /**
     * @var Collection<int, PsCartProduct>
     * @ORM\OneToMany(targetEntity="PsCartProduct", mappedBy="cart", cascade="persist")
     *
     */
    private Collection $cart_products;


    /**
     * @ORM\ManyToOne(targetEntity="PsShop")
     * @ORM\JoinColumn(name="id_shop", referencedColumnName="id_shop")
     */
    private PsShop $shop;

    /**
     *@ORM\ManyToOne(targetEntity="PsCarrier")
     * @ORM\JoinColumn(name="id_carrier",referencedColumnName="id_carrier")
     */
    private PsCarrier $carrier;
    /**
     * @var string
     *
     * @ORM\Column(name="delivery_option", type="text", length=65535, nullable=false)
     */
    private $deliveryOption;

    /**
     * @ORM\ManyToOne(targetEntity="PsLang")
     * @ORM\JoinColumn(name="id_lang", referencedColumnName="id_lang")
     */
    private PsLang $lang;
    /**
     * @ORM\ManyToOne(targetEntity="PsAddress")
     * @ORM\JoinColumn(name="id_address_delivery",referencedColumnName="id_address")
     */
    private PsAddress $delivery_address;
    /**
     * @ORM\ManyToOne(targetEntity="PsAddress")
     * @ORM\JoinColumn(name="id_address_invoice",referencedColumnName="id_address")
     */
    private PsAddress $invoice_address;
    /**
     *@ORM\ManyToOne(targetEntity="PsCurrency")
     * @ORM\JoinColumn(name="id_currency", referencedColumnName="id_currency")
     */
    private PsCurrency $currency;

    /**
     *@ORM\ManyToOne(targetEntity="PsCustomer")
     *@ORM\JoinColumn(name="id_customer", referencedColumnName="id_customer")
     */
    private PsCustomer $customer;
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
    private $recyclable = true;
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

    public function __construct()
    {
        $this->cart_products = new ArrayCollection();
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
     * @return PsShop
     */
    public function getShop(): PsShop
    {
        return $this->shop;
    }

    /**
     * @param PsShop $shop
     * @return PsCart
     */
    public function setShop(PsShop $shop): PsCart
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * @Field
     * @return PsCarrier|null
     */
    public function getCarrier(): ?PsCarrier
    {
        return $this->carrier;
    }

    /**
     * @param PsCarrier $carrier
     * @return PsCart
     */
    public function setCarrier(PsCarrier $carrier): PsCart
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getDeliveryOption(): string
    {
        return $this->deliveryOption;
    }

    /**
     * @param string $deliveryOption
     * @return PsCart
     */
    public function setDeliveryOption(string $deliveryOption): PsCart
    {
        $this->deliveryOption = $deliveryOption;
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
     * @return PsCart
     */
    public function setLang(PsLang $lang): PsCart
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @Field
     * @return PsAddress|null
     */
    public function getDeliveryAddress(): ?PsAddress
    {
        return $this->delivery_address;
    }

    /**
     * @param PsAddress $delivery_address
     * @return PsCart
     */
    public function setDeliveryAddress(PsAddress $delivery_address): PsCart
    {
        $this->delivery_address = $delivery_address;
        return $this;
    }

    /**
     * @Field
     * @return PsAddress|null
     */
    public function getInvoiceAddress(): ?PsAddress
    {
        return $this->invoice_address;
    }

    /**
     * @param PsAddress $invoice_address
     * @return PsCart
     */
    public function setInvoiceAddress(PsAddress $invoice_address): PsCart
    {
        $this->invoice_address = $invoice_address;
        return $this;
    }

    /**
     * @Field
     * @return PsCurrency|null
     */
    public function getCurrency(): ?PsCurrency
    {
        return $this->currency;
    }

    /**
     * @param PsCurrency $currency
     * @return PsCart
     */
    public function setCurrency(PsCurrency $currency): PsCart
    {
        $this->currency = $currency;
        return $this;
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
     * @return PsCart
     */
    public function setCustomer(PsCustomer $customer): PsCart
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdGuest(): int
    {
        return $this->idGuest;
    }

    /**
     * @param int $idGuest
     * @return PsCart
     */
    public function setIdGuest(int $idGuest): PsCart
    {
        $this->idGuest = $idGuest;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getSecureKey(): string
    {
        return $this->secureKey;
    }

    /**
     * @param string $secureKey
     * @return PsCart
     */
    public function setSecureKey(string $secureKey): PsCart
    {
        $this->secureKey = $secureKey;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isRecyclable(): bool
    {
        return $this->recyclable;
    }

    /**
     * @param bool $recyclable
     * @return PsCart
     */
    public function setRecyclable(bool $recyclable): PsCart
    {
        $this->recyclable = $recyclable;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * @param bool $gift
     * @return PsCart
     */
    public function setGift(bool $gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getGiftMessage(): ?string
    {
        return $this->giftMessage;
    }

    /**
     * @param string|null $giftMessage
     * @return PsCart
     */
    public function setGiftMessage(?string $giftMessage): PsCart
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getAllowSeperatedPackage()
    {
        return $this->allowSeperatedPackage;
    }

    /**
     * @param bool $allowSeperatedPackage
     * @return PsCart
     */
    public function setAllowSeperatedPackage(bool $allowSeperatedPackage)
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateAdd(): \DateTimeImmutable
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTimeImmutable $dateAdd
     * @return PsCart
     */
    public function setDateAdd(\DateTimeImmutable $dateAdd): PsCart
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateUpd(): \DateTimeImmutable
    {
        return $this->dateUpd;
    }

    /**
     * @param \DateTimeImmutable $dateUpd
     * @return PsCart
     */
    public function setDateUpd(\DateTimeImmutable $dateUpd): PsCart
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getCheckoutSessionData(): ?string
    {
        return $this->checkoutSessionData;
    }

    /**
     * @param string $checkoutSessionData
     * @return PsCart
     */
    public function setCheckoutSessionData(string $checkoutSessionData): PsCart
    {
        $this->checkoutSessionData = $checkoutSessionData;
        return $this;
    }

    /**
     * @Field
     * @return PsCartProduct[]
     */
    public function getProducts(): array
    {
        return $this->cart_products->getValues();
    }

    /**
     * @param PsCartProduct $cart_product
     * @return PsCart
     */
    public function addProduct(PsCartProduct $cart_product): PsCart
    {
        if (!$this->productInCart($cart_product)){
            $this->cart_products->add($cart_product);
        }else{
            $this->updateProductQuantity($cart_product,false);
        }
        return $this;
    }

    /**
     * @param PsCartProduct $cart_product
     * @param bool $override
     * @return bool
     */
    public function updateProductQuantity(PsCartProduct $cart_product, bool $override = true): bool
    {
        if (!$this->last_product_cached && !$this->productInCart($cart_product)){
            return false;
        }

        $index = $this->cart_products->indexOf($this->last_product_cached);

        if($cart_product->getQuantity() > 0){
            $override ? $this->cart_products[$index]->setQuantity($cart_product->getQuantity()) : $this->cart_products[$index]->addQuantity($cart_product->getQuantity());
        }else{
            $this->cart_products->remove($index);
        }
        return true;
    }

    private ?PsCartProduct $last_product_cached = null;

    /**
     * @param PsCartProduct $cart_product
     * @return bool
     */
    public function productInCart(PsCartProduct $cart_product): bool
    {
        foreach ($this->cart_products->getValues() as $item){
            if ($item->getProduct()->getId() == $cart_product->getProduct()->getId()){
                $this->last_product_cached = $item;
                return true;
            }
        }
        return false;
    }


}
