<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSpecificPrice
 *
 * @ORM\Table(name="ps_specific_price", uniqueConstraints={@ORM\UniqueConstraint(name="id_product_2", columns={"id_product", "id_product_attribute", "id_customer", "id_cart", "from", "to", "id_shop", "id_shop_group", "id_currency", "id_country", "id_group", "from_quantity", "id_specific_price_rule"})}, indexes={@ORM\Index(name="from_quantity", columns={"from_quantity"}), @ORM\Index(name="to", columns={"to"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="from", columns={"from"}), @ORM\Index(name="id_cart", columns={"id_cart"}), @ORM\Index(name="id_product", columns={"id_product", "id_shop", "id_currency", "id_country", "id_group", "id_customer", "from_quantity", "from", "to"}), @ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_specific_price_rule", columns={"id_specific_price_rule"}), @ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsSpecificPrice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPrice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSpecificPriceRule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShopGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;
    /**
     * @var int
     *
     * @ORM\Column(name="from_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fromQuantity;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $reduction;
    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false, options={"default"="1"})
     */
    private $reductionTax = \true;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_type", type="string", length=0, nullable=false)
     */
    private $reductionType;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from", type="datetime", nullable=false)
     */
    private $from;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to", type="datetime", nullable=false)
     */
    private $to;
}
