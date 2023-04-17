<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Field;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Type;
use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategoryLang
 * @Type
 * @ORM\Table(name="ps_category_lang", indexes={@ORM\Index(name="category_name", columns={"name"})})
 * @ORM\Entity
 */
class PsCategoryLang
{
    /**
     * @ORM\ManyToOne(targetEntity="PsCategory", inversedBy="localized_fields")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     * @ORM\Id
     */
    private PsCategory $category;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @ORM\ManyToOne(targetEntity="PsLang")
     * @ORM\JoinColumn(name="id_lang", referencedColumnName="id_lang")
     * @ORM\Id
     */
    private PsLang $lang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=128, nullable=false)
     */
    private $linkRewrite;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true)
     */
    private $metaKeywords;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="string", length=512, nullable=true)
     */
    private $metaDescription;

    /**
     * @Field
     * @return PsCategory
     */
    public function getCategory(): PsCategory
    {
        return $this->category;
    }

    /**
     * @param PsCategory $category
     * @return PsCategoryLang
     */
    public function setCategory(PsCategory $category): PsCategoryLang
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @Field
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return PsCategoryLang
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }

    /**
     * @Field
     * @return PsLang
     */
    public function getLang(): PsLang
    {
        return $this->lang;
    }

    /**
     * @param PsLang $lang
     * @return PsCategoryLang
     */
    public function setLang(PsLang $lang): PsCategoryLang
    {
        $this->lang = $lang;
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
     * @return PsCategoryLang
     */
    public function setName(string $name): PsCategoryLang
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return PsCategoryLang
     */
    public function setDescription(?string $description): PsCategoryLang
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @Field
     * @return string
     */
    public function getLinkRewrite(): string
    {
        return $this->linkRewrite;
    }

    /**
     * @param string $linkRewrite
     * @return PsCategoryLang
     */
    public function setLinkRewrite(string $linkRewrite): PsCategoryLang
    {
        $this->linkRewrite = $linkRewrite;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @param string|null $metaTitle
     * @return PsCategoryLang
     */
    public function setMetaTitle(?string $metaTitle): PsCategoryLang
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string|null $metaKeywords
     * @return PsCategoryLang
     */
    public function setMetaKeywords(?string $metaKeywords): PsCategoryLang
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * @Field
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     * @return PsCategoryLang
     */
    public function setMetaDescription(?string $metaDescription): PsCategoryLang
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }


}
