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
 * PsProductShop
 *
 * @ORM\Table(name="ps_product_shop", indexes={@ORM\Index(name="date_add", columns={"date_add", "active", "visibility"}), @ORM\Index(name="indexed", columns={"indexed", "active", "id_product"}), @ORM\Index(name="id_category_default", columns={"id_category_default"})})
 * @ORM\Entity
 */
class PsProductShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_category_default", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCategoryDefault;
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
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';
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
     * @ORM\Column(name="redirect_type", type="string", length=0, nullable=false)
     */
    private $redirectType = '';
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true)
     */
    private $availableDate;
    /**
     * @var bool
     *
     * @ORM\Column(name="show_condition", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showCondition = \true;
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
     * @var int|null
     *
     * @ORM\Column(name="cache_default_attribute", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $cacheDefaultAttribute;
    /**
     * @var bool
     *
     * @ORM\Column(name="advanced_stock_management", type="boolean", nullable=false)
     */
    private $advancedStockManagement = '0';
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
     * @var int
     *
     * @ORM\Column(name="pack_stock_type", type="integer", nullable=false, options={"default"="3","unsigned"=true})
     */
    private $packStockType = '3';
}
