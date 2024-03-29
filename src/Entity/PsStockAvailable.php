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
 * PsStockAvailable
 *
 * @ORM\Table(name="ps_stock_available", uniqueConstraints={@ORM\UniqueConstraint(name="product_sqlstock", columns={"id_product", "id_product_attribute", "id_shop", "id_shop_group"})}, indexes={@ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_shop_group", columns={"id_shop_group"})})
 * @ORM\Entity
 */
class PsStockAvailable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_available", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStockAvailable;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShopGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="physical_quantity", type="integer", nullable=false)
     */
    private $physicalQuantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="reserved_quantity", type="integer", nullable=false)
     */
    private $reservedQuantity = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="depends_on_stock", type="boolean", nullable=false)
     */
    private $dependsOnStock = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="out_of_stock", type="boolean", nullable=false)
     */
    private $outOfStock = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '';
}
