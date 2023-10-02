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
 * PsProductSale
 *
 * @ORM\Table(name="ps_product_sale", indexes={@ORM\Index(name="quantity", columns={"quantity"})})
 * @ORM\Entity
 */
class PsProductSale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="sale_nbr", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $saleNbr = '0';
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="date", nullable=true)
     */
    private $dateUpd;
}
