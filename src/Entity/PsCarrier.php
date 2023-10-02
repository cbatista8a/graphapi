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

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCarrier
 * @Type
 * @ORM\Table(name="ps_carrier", indexes={@ORM\Index(name="reference", columns={"id_reference", "deleted", "active"}), @ORM\Index(name="id_tax_rules_group", columns={"id_tax_rules_group"}), @ORM\Index(name="deleted", columns={"deleted", "active"})})
 * @ORM\Entity
 */
class PsCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_reference", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idReference;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idTaxRulesGroup = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_handling", type="boolean", nullable=false, options={"default"="1"})
     */
    private $shippingHandling = true;
    /**
     * @var bool
     *
     * @ORM\Column(name="range_behavior", type="boolean", nullable=false)
     */
    private $rangeBehavior = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_free", type="boolean", nullable=false)
     */
    private $isFree = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_external", type="boolean", nullable=false)
     */
    private $shippingExternal = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_range", type="boolean", nullable=false)
     */
    private $needRange = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="external_module_name", type="string", length=64, nullable=true)
     */
    private $externalModuleName;
    /**
     * @var int
     *
     * @ORM\Column(name="shipping_method", type="integer", nullable=false)
     */
    private $shippingMethod = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_width", type="integer", nullable=true)
     */
    private $maxWidth = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_height", type="integer", nullable=true)
     */
    private $maxHeight = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_depth", type="integer", nullable=true)
     */
    private $maxDepth = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="max_weight", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $maxWeight = '0.000000';
    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    private $grade = '0';

    /**
     * @Field
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @Field
     * @return int
     */
    public function getIdReference(): int
    {
        return $this->idReference;
    }

    /**
     * @param int $idReference
     * @return PsCarrier
     */
    public function setIdReference(int $idReference): PsCarrier
    {
        $this->idReference = $idReference;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getIdTaxRulesGroup()
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * @param int $idTaxRulesGroup
     * @return PsCarrier
     */
    public function setIdTaxRulesGroup(int $idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PsCarrier
     */
    public function setName(string $name): PsCarrier
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return PsCarrier
     */
    public function setUrl(string $url): PsCarrier
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return PsCarrier
     */
    public function setActive(bool $active): PsCarrier
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return PsCarrier
     */
    public function setDeleted(bool $deleted): PsCarrier
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isShippingHandling(): bool
    {
        return $this->shippingHandling;
    }

    /**
     * @param bool $shippingHandling
     * @return PsCarrier
     */
    public function setShippingHandling(bool $shippingHandling): PsCarrier
    {
        $this->shippingHandling = $shippingHandling;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getRangeBehavior()
    {
        return $this->rangeBehavior;
    }

    /**
     * @param bool $rangeBehavior
     * @return PsCarrier
     */
    public function setRangeBehavior(bool $rangeBehavior): PsCarrier
    {
        $this->rangeBehavior = $rangeBehavior;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getIsModule()
    {
        return $this->isModule;
    }

    /**
     * @param bool $isModule
     * @return PsCarrier
     */
    public function setIsModule(bool $isModule): PsCarrier
    {
        $this->isModule = $isModule;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getIsFree()
    {
        return $this->isFree;
    }

    /**
     * @param bool $isFree
     * @return PsCarrier
     */
    public function setIsFree(bool $isFree): PsCarrier
    {
        $this->isFree = $isFree;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getShippingExternal()
    {
        return $this->shippingExternal;
    }

    /**
     * @param bool $shippingExternal
     * @return PsCarrier
     */
    public function setShippingExternal(bool $shippingExternal): PsCarrier
    {
        $this->shippingExternal = $shippingExternal;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getNeedRange()
    {
        return $this->needRange;
    }

    /**
     * @param bool $needRange
     * @return PsCarrier
     */
    public function setNeedRange(bool $needRange): PsCarrier
    {
        $this->needRange = $needRange;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getExternalModuleName(): ?string
    {
        return $this->externalModuleName;
    }

    /**
     * @param string $externalModuleName
     * @return PsCarrier
     */
    public function setExternalModuleName(string $externalModuleName): PsCarrier
    {
        $this->externalModuleName = $externalModuleName;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param int $shippingMethod
     * @return PsCarrier
     */
    public function setShippingMethod(int $shippingMethod): PsCarrier
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return PsCarrier
     */
    public function setPosition(int $position): PsCarrier
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    /**
     * @param int $maxWidth
     * @return PsCarrier
     */
    public function setMaxWidth(int $maxWidth): PsCarrier
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * @param int $maxHeight
     * @return PsCarrier
     */
    public function setMaxHeight(int $maxHeight): PsCarrier
    {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * @Field
     * @return int|null
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * @param int $maxDepth
     * @return PsCarrier
     */
    public function setMaxDepth(int $maxDepth): PsCarrier
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMaxWeight(): ?string
    {
        return $this->maxWeight;
    }

    /**
     * @param string $maxWeight
     * @return PsCarrier
     */
    public function setMaxWeight(string $maxWeight): PsCarrier
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     * @return PsCarrier
     */
    public function setGrade(string $grade): PsCarrier
    {
        $this->grade = $grade;
        return $this;
    }


}
