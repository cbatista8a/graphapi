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
 * PsTaxRule
 *
 * @ORM\Table(name="ps_tax_rule", indexes={@ORM\Index(name="id_tax_rules_group", columns={"id_tax_rules_group"}), @ORM\Index(name="category_getproducts", columns={"id_tax_rules_group", "id_country", "id_state", "zipcode_from"}), @ORM\Index(name="id_tax", columns={"id_tax"})})
 * @ORM\Entity
 */
class PsTaxRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax_rule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTaxRule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=false)
     */
    private $idTaxRulesGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     */
    private $idCountry;
    /**
     * @var int
     *
     * @ORM\Column(name="id_state", type="integer", nullable=false)
     */
    private $idState;
    /**
     * @var string
     *
     * @ORM\Column(name="zipcode_from", type="string", length=12, nullable=false)
     */
    private $zipcodeFrom;
    /**
     * @var string
     *
     * @ORM\Column(name="zipcode_to", type="string", length=12, nullable=false)
     */
    private $zipcodeTo;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     */
    private $idTax;
    /**
     * @var int
     *
     * @ORM\Column(name="behavior", type="integer", nullable=false)
     */
    private $behavior;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;
}
