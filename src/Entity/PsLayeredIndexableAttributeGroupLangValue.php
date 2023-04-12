<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredIndexableAttributeGroupLangValue
 *
 * @ORM\Table(name="ps_layered_indexable_attribute_group_lang_value")
 * @ORM\Entity
 */
class PsLayeredIndexableAttributeGroupLangValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttributeGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="url_name", type="string", length=128, nullable=true)
     */
    private $urlName;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=128, nullable=true)
     */
    private $metaTitle;
}
