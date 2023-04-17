<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PsProduct
 * @Type
 * @ORM\Table(name="ps_product", indexes={@ORM\Index(name="state", columns={"state", "date_upd"}), @ORM\Index(name="reference_idx", columns={"reference"}), @ORM\Index(name="date_add", columns={"date_add"}), @ORM\Index(name="product_manufacturer", columns={"id_manufacturer", "id_product"}), @ORM\Index(name="indexed", columns={"indexed"}), @ORM\Index(name="product_supplier", columns={"id_supplier"}), @ORM\Index(name="id_category_default", columns={"id_category_default"}), @ORM\Index(name="supplier_reference_idx", columns={"supplier_reference"})})
 * @ORM\Entity
 */
class PsProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var Collection<int,PsProductLang>
     * @ORM\OneToMany(targetEntity="PsProductLang", mappedBy="product")
     */
    private Collection $localized_fields;

    /**
     * @var Collection<int, PsCategory>
     * @ORM\ManyToMany(targetEntity="PsCategory", inversedBy="products")
     * @ORM\JoinTable(name="ps_category_product",
     *      joinColumns={@ORM\JoinColumn(name="id_product", referencedColumnName="id_product")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_category", referencedColumnName="id_category")})
     */
    private Collection $categories;

    public function __construct()
    {
        $this->localized_fields = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idSupplier;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_manufacturer", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idManufacturer;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_category_default", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCategoryDefault;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_default", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopDefault = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idTaxRulesGroup;
    /**
     * @var bool
     *
     * @ORM\Column(name="on_sale", type="boolean", nullable=false)
     */
    private $onSale = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="online_only", type="boolean", nullable=false)
     */
    private $onlineOnly = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="ean13", type="string", length=13, nullable=true)
     */
    private $ean13;
    /**
     * @var string|null
     *
     * @ORM\Column(name="isbn", type="string", length=32, nullable=true)
     */
    private $isbn;
    /**
     * @var string|null
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=true)
     */
    private $upc;
    /**
     * @var string|null
     *
     * @ORM\Column(name="mpn", type="string", length=40, nullable=true)
     */
    private $mpn;
    /**
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="minimal_quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $minimalQuantity = '1';
    /**
     * @var int|null
     *
     * @ORM\Column(name="low_stock_threshold", type="integer", nullable=true)
     */
    private $lowStockThreshold;
    /**
     * @var bool
     *
     * @ORM\Column(name="low_stock_alert", type="boolean", nullable=false)
     */
    private $lowStockAlert = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $wholesalePrice = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="unity", type="string", length=255, nullable=true)
     */
    private $unity;
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_ratio", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitPriceRatio = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="additional_shipping_cost", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $additionalShippingCost = '0.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=true)
     */
    private $reference;
    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_reference", type="string", length=64, nullable=true)
     */
    private $supplierReference;
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '';
    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $width = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $height = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="depth", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $depth = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $weight = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="out_of_stock", type="integer", nullable=false, options={"default"="2","unsigned"=true})
     */
    private $outOfStock = '2';
    /**
     * @var bool
     *
     * @ORM\Column(name="additional_delivery_times", type="boolean", nullable=false, options={"default"="1"})
     */
    private $additionalDeliveryTimes = \true;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="quantity_discount", type="boolean", nullable=true)
     */
    private $quantityDiscount = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="customizable", type="boolean", nullable=false)
     */
    private $customizable = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="uploadable_files", type="boolean", nullable=false)
     */
    private $uploadableFiles = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="text_fields", type="boolean", nullable=false)
     */
    private $textFields = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="redirect_type", type="string", length=0, nullable=false, options={"default"="404"})
     */
    private $redirectType = '404';
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_redirected", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idTypeRedirected = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="available_for_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $availableForOrder = \true;
    /**
     * @var \DateTimeImmutable|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true)
     */
    private $availableDate;
    /**
     * @var bool
     *
     * @ORM\Column(name="show_condition", type="boolean", nullable=false)
     */
    private $showCondition = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=0, nullable=false, options={"default"="new"})
     */
    private $condition = 'new';
    /**
     * @var bool
     *
     * @ORM\Column(name="show_price", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showPrice = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="indexed", type="boolean", nullable=false)
     */
    private $indexed = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=0, nullable=false, options={"default"="both"})
     */
    private $visibility = 'both';
    /**
     * @var bool
     *
     * @ORM\Column(name="cache_is_pack", type="boolean", nullable=false)
     */
    private $cacheIsPack = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="cache_has_attachments", type="boolean", nullable=false)
     */
    private $cacheHasAttachments = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_virtual", type="boolean", nullable=false)
     */
    private $isVirtual = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_default_attribute", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $cacheDefaultAttribute;
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var bool
     *
     * @ORM\Column(name="advanced_stock_management", type="boolean", nullable=false)
     */
    private $advancedStockManagement = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="pack_stock_type", type="integer", nullable=false, options={"default"="3","unsigned"=true})
     */
    private $packStockType = '3';
    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $state = '1';
    /**
     * @var string
     *
     * @ORM\Column(name="product_type", type="string", length=0, nullable=false)
     */
    private $productType = '';

    /**
     * @Field
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return PsProduct
     */
    public function setWidth(string $width): PsProduct
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return PsProduct
     */
    public function setHeight(string $height): PsProduct
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getDepth(): string
    {
        return $this->depth;
    }

    /**
     * @param string $depth
     * @return PsProduct
     */
    public function setDepth(string $depth): PsProduct
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return PsProduct
     */
    public function setWeight(string $weight): PsProduct
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getOutOfStock()
    {
        return $this->outOfStock;
    }

    /**
     * @param int $outOfStock
     * @return PsProduct
     */
    public function setOutOfStock(int $outOfStock)
    {
        $this->outOfStock = $outOfStock;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isAdditionalDeliveryTimes(): bool
    {
        return $this->additionalDeliveryTimes;
    }

    /**
     * @param bool $additionalDeliveryTimes
     * @return PsProduct
     */
    public function setAdditionalDeliveryTimes(bool $additionalDeliveryTimes): PsProduct
    {
        $this->additionalDeliveryTimes = $additionalDeliveryTimes;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function hasQuantityDiscount()
    {
        return $this->quantityDiscount;
    }

    /**
     * @param bool $quantityDiscount
     * @return PsProduct
     */
    public function setQuantityDiscount(bool $quantityDiscount)
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getCustomizable()
    {
        return $this->customizable;
    }

    /**
     * @param bool $customizable
     * @return PsProduct
     */
    public function setCustomizable(bool $customizable)
    {
        $this->customizable = $customizable;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getUploadableFiles()
    {
        return $this->uploadableFiles;
    }

    /**
     * @param bool $uploadableFiles
     * @return PsProduct
     */
    public function setUploadableFiles(bool $uploadableFiles)
    {
        $this->uploadableFiles = $uploadableFiles;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getTextFields()
    {
        return $this->textFields;
    }

    /**
     * @param bool $textFields
     * @return PsProduct
     */
    public function setTextFields(bool $textFields)
    {
        $this->textFields = $textFields;
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
     * @return PsProduct
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getRedirectType(): string
    {
        return $this->redirectType;
    }

    /**
     * @param string $redirectType
     * @return PsProduct
     */
    public function setRedirectType(string $redirectType): PsProduct
    {
        $this->redirectType = $redirectType;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdTypeRedirected()
    {
        return $this->idTypeRedirected;
    }

    /**
     * @param int $idTypeRedirected
     * @return PsProduct
     */
    public function setIdTypeRedirected(int $idTypeRedirected)
    {
        $this->idTypeRedirected = $idTypeRedirected;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isAvailableForOrder(): bool
    {
        return $this->availableForOrder;
    }

    /**
     * @param bool $availableForOrder
     * @return PsProduct
     */
    public function setAvailableForOrder(bool $availableForOrder): PsProduct
    {
        $this->availableForOrder = $availableForOrder;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeInterface|null
     */
    public function getAvailableDate(): ?\DateTimeInterface
    {
        return $this->availableDate;
    }

    /**
     * @param \DateTimeInterface|null $availableDate
     * @return PsProduct
     */
    public function setAvailableDate(\DateTimeInterface $availableDate): PsProduct
    {
        $this->availableDate = $availableDate;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getShowCondition()
    {
        return $this->showCondition;
    }

    /**
     * @param bool $showCondition
     * @return PsProduct
     */
    public function setShowCondition(bool $showCondition)
    {
        $this->showCondition = $showCondition;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @param string $condition new|used|refurbished
     * @return PsProduct
     */
    public function setCondition(string $condition): PsProduct
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function showPrice(): bool
    {
        return $this->showPrice;
    }

    /**
     * @param bool $showPrice
     * @return PsProduct
     */
    public function setShowPrice(bool $showPrice): PsProduct
    {
        $this->showPrice = $showPrice;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * @param bool $indexed
     * @return PsProduct
     */
    public function setIndexed(bool $indexed)
    {
        $this->indexed = $indexed;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility both|catalog|search|none
     * @return PsProduct
     */
    public function setVisibility(string $visibility): PsProduct
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getCacheIsPack()
    {
        return $this->cacheIsPack;
    }

    /**
     * @param bool $cacheIsPack
     * @return PsProduct
     */
    public function setCacheIsPack(bool $cacheIsPack)
    {
        $this->cacheIsPack = $cacheIsPack;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getCacheHasAttachments()
    {
        return $this->cacheHasAttachments;
    }

    /**
     * @param bool $cacheHasAttachments
     * @return PsProduct
     */
    public function setCacheHasAttachments(bool $cacheHasAttachments)
    {
        $this->cacheHasAttachments = $cacheHasAttachments;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->isVirtual;
    }

    /**
     * @param bool $isVirtual
     * @return PsProduct
     */
    public function setIsVirtual(bool $isVirtual)
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getCacheDefaultAttribute(): ?int
    {
        return $this->cacheDefaultAttribute;
    }

    /**
     * @param int $cacheDefaultAttribute
     * @return PsProduct
     */
    public function setCacheDefaultAttribute(int $cacheDefaultAttribute): PsProduct
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeInterface
     */
    public function getDateAdd(): \DateTimeInterface
    {
        return $this->dateAdd;
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
     * @param \DateTimeInterface $dateUpd
     * @return PsProduct
     */
    public function setDateUpd(\DateTimeInterface $dateUpd): PsProduct
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getAdvancedStockManagement()
    {
        return $this->advancedStockManagement;
    }

    /**
     * @param bool $advancedStockManagement
     * @return PsProduct
     */
    public function setAdvancedStockManagement(bool $advancedStockManagement)
    {
        $this->advancedStockManagement = $advancedStockManagement;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getPackStockType()
    {
        return $this->packStockType;
    }

    /**
     * @param int $packStockType
     * @return PsProduct
     */
    public function setPackStockType(int $packStockType)
    {
        $this->packStockType = $packStockType;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return PsProduct
     */
    public function setState(int $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @param string $productType standard|pack|virtual|combinations
     * @return PsProduct
     */
    public function setProductType(string $productType): PsProduct
    {
        $this->productType = $productType;
        return $this;
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
     * @return int|null
     */
    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getIdManufacturer(): ?int
    {
        return $this->idManufacturer;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getIdCategoryDefault(): ?int
    {
        return $this->idCategoryDefault;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdShopDefault()
    {
        return $this->idShopDefault;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdTaxRulesGroup(): int
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * @Field
     * @return bool
     */
    public function getOnSale()
    {
        return $this->onSale;
    }

    /**
     * @Field
     * @return bool
     */
    public function getOnlineOnly()
    {
        return $this->onlineOnly;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    /**
     * @param string|null $ean13
     * @return PsProduct
     */
    public function setEan13(?string $ean13): PsProduct
    {
        $this->ean13 = $ean13;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string|null $isbn
     * @return PsProduct
     */
    public function setIsbn(?string $isbn): PsProduct
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    /**
     * @param string|null $upc
     * @return PsProduct
     */
    public function setUpc(?string $upc): PsProduct
    {
        $this->upc = $upc;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    /**
     * @param string|null $mpn
     * @return PsProduct
     */
    public function setMpn(?string $mpn): PsProduct
    {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getEcotax(): string
    {
        return $this->ecotax;
    }

    /**
     * @Field
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @Field
     * @return int
     */
    public function getMinimalQuantity()
    {
        return $this->minimalQuantity;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getLowStockThreshold(): ?int
    {
        return $this->lowStockThreshold;
    }

    /**
     * @param int|null $lowStockThreshold
     * @return PsProduct
     */
    public function setLowStockThreshold(?int $lowStockThreshold): PsProduct
    {
        $this->lowStockThreshold = $lowStockThreshold;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getLowStockAlert()
    {
        return $this->lowStockAlert;
    }

    /**
     * @Field
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @Field
     * @return string
     */
    public function getWholesalePrice(): string
    {
        return $this->wholesalePrice;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getUnity(): ?string
    {
        return $this->unity;
    }

    /**
     * @param string|null $unity
     * @return PsProduct
     */
    public function setUnity(?string $unity): PsProduct
    {
        $this->unity = $unity;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getUnitPriceRatio(): string
    {
        return $this->unitPriceRatio;
    }

    /**
     * @Field
     * @return string
     */
    public function getAdditionalShippingCost(): string
    {
        return $this->additionalShippingCost;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     * @return PsProduct
     */
    public function setReference(?string $reference): PsProduct
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    /**
     * @param string|null $supplierReference
     * @return PsProduct
     */
    public function setSupplierReference(?string $supplierReference): PsProduct
    {
        $this->supplierReference = $supplierReference;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @Field
     * @param int $id_lang
     * @return PsProductLang[]
     */
    public function getLocalizedFields(int $id_lang = 0): array
    {
        if ($id_lang){
            foreach ($this->localized_fields->getValues() as $languaje){
                if ($languaje->getLang()->getId() == $id_lang)
                    return [$languaje];
            }
        }
        return $this->localized_fields->getValues();
    }

    /**
     * @param PsProductLang $lang
     * @return PsProduct
     */
    public function setLang(PsProductLang $lang): PsProduct
    {
        $this->localized_fields->add($lang);
        return $this;
    }

    /**
     * @Field
     * @return PsCategory[]
     */
    public function getCategories(): array
    {
        return $this->categories->getValues();
    }

    /**
     * @param PsCategory $category
     * @return PsProduct
     */
    public function addCategory(PsCategory $category): PsProduct
    {
        $this->categories->add($category);
        return $this;
    }
}
