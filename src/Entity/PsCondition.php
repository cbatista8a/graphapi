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
 * PsCondition
 *
 * @ORM\Table(name="ps_condition")
 * @ORM\Entity
 */
class PsCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCondition;
    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPsCondition;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;
    /**
     * @var string|null
     *
     * @ORM\Column(name="request", type="text", length=16777215, nullable=true)
     */
    private $request;
    /**
     * @var string|null
     *
     * @ORM\Column(name="operator", type="string", length=32, nullable=true)
     */
    private $operator;
    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=64, nullable=true)
     */
    private $value;
    /**
     * @var string|null
     *
     * @ORM\Column(name="result", type="string", length=64, nullable=true)
     */
    private $result;
    /**
     * @var string|null
     *
     * @ORM\Column(name="calculation_type", type="string", length=0, nullable=true)
     */
    private $calculationType;
    /**
     * @var string|null
     *
     * @ORM\Column(name="calculation_detail", type="string", length=64, nullable=true)
     */
    private $calculationDetail;
    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
}
