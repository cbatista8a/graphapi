<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCartRuleShop
 *
 * @ORM\Table(name="ps_cart_rule_shop")
 * @ORM\Entity
 */
class PsCartRuleShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCartRule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
