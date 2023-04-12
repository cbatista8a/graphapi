<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsFeatureFlag
 *
 * @ORM\Table(name="ps_feature_flag", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_91700F175E237E06", columns={"name"})})
 * @ORM\Entity
 */
class PsFeatureFlag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_flag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeatureFlag;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;
    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="label_wording", type="string", length=191, nullable=false)
     */
    private $labelWording = '';
    /**
     * @var string
     *
     * @ORM\Column(name="label_domain", type="string", length=255, nullable=false)
     */
    private $labelDomain = '';
    /**
     * @var string
     *
     * @ORM\Column(name="description_wording", type="string", length=191, nullable=false)
     */
    private $descriptionWording = '';
    /**
     * @var string
     *
     * @ORM\Column(name="description_domain", type="string", length=255, nullable=false)
     */
    private $descriptionDomain = '';
}
