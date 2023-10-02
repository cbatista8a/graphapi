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
 * PsOrderState
 *
 * @ORM\Table(name="ps_order_state", indexes={@ORM\Index(name="module_name", columns={"module_name"})})
 * @ORM\Entity
 */
class PsOrderState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderState;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice", type="boolean", nullable=true)
     */
    private $invoice = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="send_email", type="boolean", nullable=false)
     */
    private $sendEmail = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;
    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true)
     */
    private $color;
    /**
     * @var bool
     *
     * @ORM\Column(name="unremovable", type="boolean", nullable=false)
     */
    private $unremovable;
    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="logable", type="boolean", nullable=false)
     */
    private $logable = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=false)
     */
    private $delivery = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shipped", type="boolean", nullable=false)
     */
    private $shipped = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="paid", type="boolean", nullable=false)
     */
    private $paid = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="pdf_invoice", type="boolean", nullable=false)
     */
    private $pdfInvoice = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="pdf_delivery", type="boolean", nullable=false)
     */
    private $pdfDelivery = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
}
