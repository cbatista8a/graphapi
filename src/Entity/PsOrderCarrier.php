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
 * PsOrderCarrier
 *
 * @ORM\Table(name="ps_order_carrier", indexes={@ORM\Index(name="id_order_invoice", columns={"id_order_invoice"}), @ORM\Index(name="id_carrier", columns={"id_carrier"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_carrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderCarrier;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idOrderInvoice;
    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $weight;
    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $shippingCostTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $shippingCostTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="string", length=64, nullable=true)
     */
    private $trackingNumber;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
