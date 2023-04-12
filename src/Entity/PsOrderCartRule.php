<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderCartRule
 *
 * @ORM\Table(name="ps_order_cart_rule", indexes={@ORM\Index(name="id_cart_rule", columns={"id_cart_rule"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderCartRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderCartRule;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCartRule;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idOrderInvoice = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $value = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="value_tax_excl", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $valueTaxExcl = '0.000000';
    /**
     * @var bool
     *
     * @ORM\Column(name="free_shipping", type="boolean", nullable=false)
     */
    private $freeShipping = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
}
