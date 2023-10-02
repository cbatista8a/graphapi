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
 * PsSpecificPriceRuleCondition
 *
 * @ORM\Table(name="ps_specific_price_rule_condition", indexes={@ORM\Index(name="id_specific_price_rule_condition_group", columns={"id_specific_price_rule_condition_group"})})
 * @ORM\Entity
 */
class PsSpecificPriceRuleCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule_condition", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPriceRuleCondition;
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule_condition_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSpecificPriceRuleConditionGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;
}
