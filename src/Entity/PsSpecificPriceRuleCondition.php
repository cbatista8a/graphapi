<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSpecificPriceRuleCondition
 *
 * @ORM\Table(name="ps_specific_price_rule_condition", indexes={@ORM\Index(name="id_specific_price_rule_condition_group", columns={"id_specific_price_rule_condition_group"})})
 * @ORM\Entity
 */
class PsSpecificPriceRuleCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule_condition", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPriceRuleCondition;
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule_condition_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSpecificPriceRuleConditionGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;
}
