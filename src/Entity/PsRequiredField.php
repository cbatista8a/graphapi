<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsRequiredField
 *
 * @ORM\Table(name="ps_required_field", indexes={@ORM\Index(name="object_name", columns={"object_name"})})
 * @ORM\Entity
 */
class PsRequiredField
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_required_field", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequiredField;
    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=32, nullable=false)
     */
    private $objectName;
    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=32, nullable=false)
     */
    private $fieldName;
}
