<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsSpecificPriceRuleConditionGroup
 *
 * @ORM\Table(name="ps_specific_price_rule_condition_group")
 * @ORM\Entity
 */
class PsSpecificPriceRuleConditionGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule_condition_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSpecificPriceRuleConditionGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSpecificPriceRule;
}
