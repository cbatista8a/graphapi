<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredIndexableFeatureLangValue
 *
 * @ORM\Table(name="ps_layered_indexable_feature_lang_value")
 * @ORM\Entity
 */
class PsLayeredIndexableFeatureLangValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeature;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="url_name", type="string", length=128, nullable=false)
     */
    private $urlName;
    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=128, nullable=true)
     */
    private $metaTitle;
}
