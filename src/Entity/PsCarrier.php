<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCarrier
 *
 * @ORM\Table(name="ps_carrier", indexes={@ORM\Index(name="reference", columns={"id_reference", "deleted", "active"}), @ORM\Index(name="id_tax_rules_group", columns={"id_tax_rules_group"}), @ORM\Index(name="deleted", columns={"deleted", "active"})})
 * @ORM\Entity
 */
class PsCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarrier;
    /**
     * @var int
     *
     * @ORM\Column(name="id_reference", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idReference;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idTaxRulesGroup = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_handling", type="boolean", nullable=false, options={"default"="1"})
     */
    private $shippingHandling = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="range_behavior", type="boolean", nullable=false)
     */
    private $rangeBehavior = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="is_free", type="boolean", nullable=false)
     */
    private $isFree = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_external", type="boolean", nullable=false)
     */
    private $shippingExternal = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="need_range", type="boolean", nullable=false)
     */
    private $needRange = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="external_module_name", type="string", length=64, nullable=true)
     */
    private $externalModuleName;
    /**
     * @var int
     *
     * @ORM\Column(name="shipping_method", type="integer", nullable=false)
     */
    private $shippingMethod = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_width", type="integer", nullable=true)
     */
    private $maxWidth = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_height", type="integer", nullable=true)
     */
    private $maxHeight = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="max_depth", type="integer", nullable=true)
     */
    private $maxDepth = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="max_weight", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $maxWeight = '0.000000';
    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    private $grade = '0';
}
