<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderReturnDetail
 *
 * @ORM\Table(name="ps_order_return_detail")
 * @ORM\Entity
 */
class PsOrderReturnDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_return", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderReturn;
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
     * @ORM\Column(name="id_customization", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomization = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantity = '0';
}
