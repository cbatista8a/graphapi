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
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategory
 * @Type
 * @ORM\Table(name="ps_category", indexes={@ORM\Index(name="activenleft", columns={"active", "nleft"}), @ORM\Index(name="nright", columns={"nright"}), @ORM\Index(name="nleftrightactive", columns={"nleft", "nright", "active"}), @ORM\Index(name="activenright", columns={"active", "nright"}), @ORM\Index(name="level_depth", columns={"level_depth"}), @ORM\Index(name="category_parent", columns={"id_parent"})})
 * @ORM\Entity
 */
class PsCategory
{

    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Collection<int, PsProduct>
     * @ORM\ManyToMany(targetEntity="PsProduct", mappedBy="categories")
     * @ORM\JoinTable(name="ps_category_product",
     *      joinColumns={@ORM\JoinColumn(name="id_category", referencedColumnName="id_category")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_product", referencedColumnName="id_product")})
     *
     */
    private Collection $products;

    /**
     * @var Collection<int, PsCategoryLang>
     * @ORM\OneToMany(targetEntity="PsCategoryLang", mappedBy="category")
     */
    private Collection $localized_fields;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->localized_fields = new ArrayCollection();
    }


    /**
     * @ORM\OneToOne(targetEntity="PsCategory")
     * @ORM\JoinColumn(name="id_parent", referencedColumnName="id_category")
     */
    private PsCategory $parent;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_default", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopDefault = '1';
    /**
     * @var bool
     *
     * @ORM\Column(name="level_depth", type="boolean", nullable=false)
     */
    private $levelDepth = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="nleft", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nleft = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="nright", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nright = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTimeImmutable
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_root_category", type="boolean", nullable=false)
     */
    private $isRootCategory = '0';

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
     * @param bool $with_pagination
     * @param int $offset
     * @param int $limit
     * @return PsProduct[]
     */
    public function getProducts(bool $with_pagination = true,int $offset = 0, int $limit = 12): array
    {
        return $with_pagination ? $this->products->slice($offset,$limit) : $this->products->getValues();
    }

    /**
     * @Field
     * @return int
     */
    public function productsCount(): int
    {
        return $this->products->count();
    }

    /**
     * @param PsProduct $product
     * @return PsCategory
     */
    public function addProduct(PsProduct $product): PsCategory
    {
        $product->addCategory($this);
        $this->products->add($product);
        return $this;
    }

    /**
     * @Field
     * @return PsCategory
     */
    public function getParent(): PsCategory
    {
        return $this->parent;
    }

    /**
     * @param PsCategory $parent
     * @return PsCategory
     */
    public function setIdParent(PsCategory $parent): PsCategory
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdShopDefault()
    {
        return $this->idShopDefault;
    }

    /**
     * @param int $idShopDefault
     * @return PsCategory
     */
    public function setIdShopDefault(int $idShopDefault)
    {
        $this->idShopDefault = $idShopDefault;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function getLevelDepth()
    {
        return $this->levelDepth;
    }

    /**
     * @param bool $levelDepth
     * @return PsCategory
     */
    public function setLevelDepth(bool $levelDepth)
    {
        $this->levelDepth = $levelDepth;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getNleft()
    {
        return $this->nleft;
    }

    /**
     * @param int $nleft
     * @return PsCategory
     */
    public function setNleft(int $nleft)
    {
        $this->nleft = $nleft;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getNright()
    {
        return $this->nright;
    }

    /**
     * @param int $nright
     * @return PsCategory
     */
    public function setNright(int $nright)
    {
        $this->nright = $nright;
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
     * @return PsCategory
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateAdd(): \DateTimeImmutable
    {
        return $this->dateAdd;
    }

    /**
     * @param \DateTime $dateAdd
     * @return PsCategory
     */
    public function setDateAdd(\DateTime $dateAdd): PsCategory
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    /**
     * @Field
     * @return \DateTimeImmutable
     */
    public function getDateUpd(): \DateTimeImmutable
    {
        return $this->dateUpd;
    }

    /**
     * @param \DateTime $dateUpd
     * @return PsCategory
     */
    public function setDateUpd(\DateTime $dateUpd): PsCategory
    {
        $this->dateUpd = $dateUpd;
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
     * @return PsCategory
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @Field
     * @return bool
     */
    public function isRootCategory()
    {
        return $this->isRootCategory;
    }

    /**
     * @param bool $isRootCategory
     * @return PsCategory
     */
    public function setIsRootCategory(bool $isRootCategory)
    {
        $this->isRootCategory = $isRootCategory;
        return $this;
    }

    /**
     * @Field
     * @param int $id_lang
     * @return PsCategoryLang[]
     */
    public function getLocalizedFields(int $id_lang = 0): array
    {
        if ($id_lang){
            foreach ($this->localized_fields->getValues() as $languaje){
                if ($languaje->getLang()->getId() == $id_lang)
                    return [$languaje];
            }
        }
        return $this->localized_fields->getValues();
    }

    /**
     * @param PsCategoryLang $localized_fields
     * @return PsCategory
     */
    public function setLocalizedFields(PsCategoryLang $localized_fields): PsCategory
    {
        $this->localized_fields->add($localized_fields);
        return $this;
    }


}
