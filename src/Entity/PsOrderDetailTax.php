<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderDetailTax
 *
 * @ORM\Table(name="ps_order_detail_tax", indexes={@ORM\Index(name="id_tax", columns={"id_tax"}), @ORM\Index(name="id_order_detail", columns={"id_order_detail"})})
 * @ORM\Entity
 */
class PsOrderDetailTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderDetail;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTax;
    /**
     * @var string
     *
     * @ORM\Column(name="unit_amount", type="decimal", precision=16, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitAmount = '0.000000';
    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="decimal", precision=16, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalAmount = '0.000000';
}
