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
 * PsSupplyOrderState
 *
 * @ORM\Table(name="ps_supply_order_state")
 * @ORM\Entity
 */
class PsSupplyOrderState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderState;
    /**
     * @var bool
     *
     * @ORM\Column(name="delivery_note", type="boolean", nullable=false)
     */
    private $deliveryNote = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="editable", type="boolean", nullable=false)
     */
    private $editable = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="receipt_state", type="boolean", nullable=false)
     */
    private $receiptState = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="pending_receipt", type="boolean", nullable=false)
     */
    private $pendingReceipt = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="enclosed", type="boolean", nullable=false)
     */
    private $enclosed = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true)
     */
    private $color;
}
