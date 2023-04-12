<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLayeredIndexableFeatureValueLangValue
 *
 * @ORM\Table(name="ps_layered_indexable_feature_value_lang_value")
 * @ORM\Entity
 */
class PsLayeredIndexableFeatureValueLangValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeatureValue;
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
