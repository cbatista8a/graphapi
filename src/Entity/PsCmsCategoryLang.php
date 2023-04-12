<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCmsCategoryLang
 *
 * @ORM\Table(name="ps_cms_category_lang", indexes={@ORM\Index(name="category_name", columns={"name"})})
 * @ORM\Entity
 */
class PsCmsCategoryLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCmsCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
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
}
