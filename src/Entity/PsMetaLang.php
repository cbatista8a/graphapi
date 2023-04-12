<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsMetaLang
 *
 * @ORM\Table(name="ps_meta_lang", indexes={@ORM\Index(name="id_lang", columns={"id_lang"}), @ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsMetaLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_meta", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMeta;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=true)
     */
    private $title;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;
    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;
    /**
     * @var string
     *
     * @ORM\Column(name="url_rewrite", type="string", length=254, nullable=false)
     */
    private $urlRewrite;
}
