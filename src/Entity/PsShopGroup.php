<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsShopGroup
 * @Type
 * @ORM\Table(name="ps_shop_group")
 * @ORM\Entity
 */
class PsShopGroup
{
    public function __construct()
    {
        $this->shops = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Collection<int,PsShop>
     * @ORM\OneToMany(targetEntity="PsShop", mappedBy="shopGroup")
     */
    private Collection $shops;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_customer", type="boolean", nullable=false)
     */
    private $shareCustomer;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_order", type="boolean", nullable=false)
     */
    private $shareOrder;
    /**
     * @var bool
     *
     * @ORM\Column(name="share_stock", type="boolean", nullable=false)
     */
    private $shareStock;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

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
     * @return PsShop[]
     */
    public function getShops(): array
    {
        return $this->shops->getValues();
    }

    /**
     * @param PsShop $shop
     * @return PsShopGroup
     */
    public function setShop(PsShop $shop): PsShopGroup
    {
        $this->shops->add($shop);
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
     * @return PsShopGroup
     */
    public function setName(string $name): PsShopGroup
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return PsShopGroup
     */
    public function setColor(string $color): PsShopGroup
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isShareCustomer(): bool
    {
        return $this->shareCustomer;
    }

    /**
     * @param bool $shareCustomer
     * @return PsShopGroup
     */
    public function setShareCustomer(bool $shareCustomer): PsShopGroup
    {
        $this->shareCustomer = $shareCustomer;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isShareOrder(): bool
    {
        return $this->shareOrder;
    }

    /**
     * @param bool $shareOrder
     * @return PsShopGroup
     */
    public function setShareOrder(bool $shareOrder): PsShopGroup
    {
        $this->shareOrder = $shareOrder;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isShareStock(): bool
    {
        return $this->shareStock;
    }

    /**
     * @param bool $shareStock
     * @return PsShopGroup
     */
    public function setShareStock(bool $shareStock): PsShopGroup
    {
        $this->shareStock = $shareStock;
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
     * @return PsShopGroup
     */
    public function setActive(bool $active): PsShopGroup
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return PsShopGroup
     */
    public function setDeleted(bool $deleted): PsShopGroup
    {
        $this->deleted = $deleted;
        return $this;
    }


}
