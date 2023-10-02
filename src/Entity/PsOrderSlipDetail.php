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
 * PsOrderSlipDetail
 *
 * @ORM\Table(name="ps_order_slip_detail")
 * @ORM\Entity
 */
class PsOrderSlipDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_slip", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderSlip;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantity = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $unitPriceTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $unitPriceTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalPriceTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalPriceTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $amountTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $amountTaxIncl;
}
