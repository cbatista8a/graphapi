<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsFeatureValue
 *
 * @ORM\Table(name="ps_feature_value", indexes={@ORM\Index(name="feature", columns={"id_feature"})})
 * @ORM\Entity
 */
class PsFeatureValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeatureValue;
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idFeature;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="custom", type="boolean", nullable=true)
     */
    private $custom;
}
