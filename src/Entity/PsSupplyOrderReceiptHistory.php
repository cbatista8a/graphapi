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
 * PsSupplyOrderReceiptHistory
 *
 * @ORM\Table(name="ps_supply_order_receipt_history", indexes={@ORM\Index(name="id_supply_order_detail", columns={"id_supply_order_detail"}), @ORM\Index(name="id_supply_order_state", columns={"id_supply_order_state"})})
 * @ORM\Entity
 */
class PsSupplyOrderReceiptHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_receipt_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderReceiptHistory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_lastname", type="string", length=255, nullable=true)
     */
    private $employeeLastname = '';
    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_firstname", type="string", length=255, nullable=true)
     */
    private $employeeFirstname = '';
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderState;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
