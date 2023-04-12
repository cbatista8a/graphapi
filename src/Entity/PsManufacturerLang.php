<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsManufacturerLang
 *
 * @ORM\Table(name="ps_manufacturer_lang")
 * @ORM\Entity
 */
class PsManufacturerLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_manufacturer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idManufacturer;
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var string|null
     *
     * @ORM\Column(name="short_description", type="text", length=65535, nullable=true)
     */
    private $shortDescription;
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
