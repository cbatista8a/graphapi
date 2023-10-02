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

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCartRule
 *
 * @ORM\Table(name="ps_cart_rule", indexes={@ORM\Index(name="date_from", columns={"date_from"}), @ORM\Index(name="group_restriction", columns={"group_restriction", "active", "date_to"}), @ORM\Index(name="group_restriction_2", columns={"group_restriction", "active", "highlight", "date_to"}), @ORM\Index(name="id_customer_2", columns={"id_customer", "active", "highlight", "date_to"}), @ORM\Index(name="date_to", columns={"date_to"}), @ORM\Index(name="id_customer", columns={"id_customer", "active", "date_to"})})
 * @ORM\Entity
 */
class PsCartRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCartRule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=false)
     */
    private $dateFrom;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=false)
     */
    private $dateTo;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="quantity_per_user", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityPerUser = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $priority = '1';
    /**
     * @var bool
     *
     * @ORM\Column(name="partial_use", type="boolean", nullable=false)
     */
    private $partialUse = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=254, nullable=false)
     */
    private $code;
    /**
     * @var string
     *
     * @ORM\Column(name="minimum_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $minimumAmount = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="minimum_amount_tax", type="boolean", nullable=false)
     */
    private $minimumAmountTax = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="minimum_amount_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $minimumAmountCurrency = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="minimum_amount_shipping", type="boolean", nullable=false)
     */
    private $minimumAmountShipping = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="country_restriction", type="boolean", nullable=false)
     */
    private $countryRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="carrier_restriction", type="boolean", nullable=false)
     */
    private $carrierRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="group_restriction", type="boolean", nullable=false)
     */
    private $groupRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="cart_rule_restriction", type="boolean", nullable=false)
     */
    private $cartRuleRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="product_restriction", type="boolean", nullable=false)
     */
    private $productRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shop_restriction", type="boolean", nullable=false)
     */
    private $shopRestriction = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="free_shipping", type="boolean", nullable=false)
     */
    private $freeShipping = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_percent", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reductionPercent = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="reduction_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $reductionAmount = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false)
     */
    private $reductionTax = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="reduction_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reductionCurrency = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="reduction_product", type="integer", nullable=false)
     */
    private $reductionProduct = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_exclude_special", type="boolean", nullable=false)
     */
    private $reductionExcludeSpecial = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="gift_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $giftProduct = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="gift_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $giftProductAttribute = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="highlight", type="boolean", nullable=false)
     */
    private $highlight = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
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
}
