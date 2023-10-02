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
 * PsShop
 * @Type
 * @ORM\Table(name="ps_shop", indexes={@ORM\Index(name="IDX_CBDFBB9EF5C9E40", columns={"id_shop_group"})})
 * @ORM\Entity
 */
class PsShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="PsShopGroup", inversedBy="shops")
     * @ORM\JoinColumn(name="id_shop_group", referencedColumnName="id_shop_group")
     */
    private $shopGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     */
    private $idCategory;
    /**
     * @var string
     *
     * @ORM\Column(name="theme_name", type="string", length=255, nullable=false)
     */
    private $themeName;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

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
     * @return PsShopGroup
     */
    public function getShopGroup()
    {
        return $this->shopGroup;
    }

    /**
     * @param PsShopGroup $shopGroup
     * @return PsShop
     */
    public function setShopGroup(PsShopGroup $shopGroup)
    {
        $this->shopGroup = $shopGroup;
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
     * @return PsShop
     */
    public function setName(string $name): PsShop
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return PsShop
     */
    public function setColor(string $color): PsShop
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->idCategory;
    }

    /**
     * @param int $idCategory
     * @return PsShop
     */
    public function setIdCategory(int $idCategory): PsShop
    {
        $this->idCategory = $idCategory;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getThemeName(): string
    {
        return $this->themeName;
    }

    /**
     * @param string $themeName
     * @return PsShop
     */
    public function setThemeName(string $themeName): PsShop
    {
        $this->themeName = $themeName;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return PsShop
     */
    public function setActive(bool $active): PsShop
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return PsShop
     */
    public function setDeleted(bool $deleted): PsShop
    {
        $this->deleted = $deleted;
        return $this;
    }
}
