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
 * PsProductSupplier
 *
 * @ORM\Table(name="ps_product_supplier", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_product_attribute", "id_supplier"})}, indexes={@ORM\Index(name="id_supplier", columns={"id_supplier", "id_product"})})
 * @ORM\Entity
 */
class PsProductSupplier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_supplier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductSupplier;
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
    private $idProductAttribute = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplier;
    /**
     * @var string|null
     *
     * @ORM\Column(name="product_supplier_reference", type="string", length=64, nullable=true)
     */
    private $productSupplierReference;
    /**
     * @var string
     *
     * @ORM\Column(name="product_supplier_price_te", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $productSupplierPriceTe = '0.000000';
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
}
