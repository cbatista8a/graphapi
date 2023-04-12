<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCartCartRule
 *
 * @ORM\Table(name="ps_cart_cart_rule", indexes={@ORM\Index(name="id_cart_rule", columns={"id_cart_rule"})})
 * @ORM\Entity
 */
class PsCartCartRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCartRule;
}
