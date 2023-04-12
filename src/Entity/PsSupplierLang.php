<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSupplierLang
 *
 * @ORM\Table(name="ps_supplier_lang")
 * @ORM\Entity
 */
class PsSupplierLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSupplier;
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
