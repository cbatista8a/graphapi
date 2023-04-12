<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomizedData
 *
 * @ORM\Table(name="ps_customized_data")
 * @ORM\Entity
 */
class PsCustomizedData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customization", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomization;
    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;
    /**
     * @var int
     *
     * @ORM\Column(name="index", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $index;
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;
    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false)
     */
    private $idModule = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $weight = '0.000000';
}
