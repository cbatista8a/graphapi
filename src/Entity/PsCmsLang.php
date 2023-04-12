<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCmsLang
 *
 * @ORM\Table(name="ps_cms_lang")
 * @ORM\Entity
 */
class PsCmsLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCms;
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
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=false)
     */
    private $metaTitle;
    /**
     * @var string|null
     *
     * @ORM\Column(name="head_seo_title", type="string", length=255, nullable=true)
     */
    private $headSeoTitle;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="string", length=512, nullable=true)
     */
    private $metaDescription;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true)
     */
    private $metaKeywords;
    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=true)
     */
    private $content;
    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=128, nullable=false)
     */
    private $linkRewrite;
}
