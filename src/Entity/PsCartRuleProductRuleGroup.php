<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCartRuleProductRuleGroup
 *
 * @ORM\Table(name="ps_cart_rule_product_rule_group")
 * @ORM\Entity
 */
class PsCartRuleProductRuleGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_rule_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductRuleGroup;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCartRule;
    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $quantity = '1';
}
