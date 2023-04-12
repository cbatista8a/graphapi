<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomizationField
 *
 * @ORM\Table(name="ps_customization_field", indexes={@ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsCustomizationField
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customization_field", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomizationField;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;
    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';
}
