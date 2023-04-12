<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderSlipDetail
 *
 * @ORM\Table(name="ps_order_slip_detail")
 * @ORM\Entity
 */
class PsOrderSlipDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_slip", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderSlip;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantity = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $unitPriceTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $unitPriceTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalPriceTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $totalPriceTaxIncl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_excl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $amountTaxExcl;
    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_incl", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $amountTaxIncl;
}
