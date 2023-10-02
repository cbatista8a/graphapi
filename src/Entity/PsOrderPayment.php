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
 * PsOrderPayment
 *
 * @ORM\Table(name="ps_order_payment", indexes={@ORM\Index(name="order_reference", columns={"order_reference"})})
 * @ORM\Entity
 */
class PsOrderPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_payment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderPayment;
    /**
     * @var string|null
     *
     * @ORM\Column(name="order_reference", type="string", length=9, nullable=true)
     */
    private $orderReference;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $amount;
    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=255, nullable=false)
     */
    private $paymentMethod;
    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=254, nullable=true)
     */
    private $transactionId;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_number", type="string", length=254, nullable=true)
     */
    private $cardNumber;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_brand", type="string", length=254, nullable=true)
     */
    private $cardBrand;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_expiration", type="string", length=7, nullable=true, options={"fixed"=true})
     */
    private $cardExpiration;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_holder", type="string", length=254, nullable=true)
     */
    private $cardHolder;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
