<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPscheckoutOrderMatrice
 *
 * @ORM\Table(name="ps_pscheckout_order_matrice")
 * @ORM\Entity
 */
class PsPscheckoutOrderMatrice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_matrice", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderMatrice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_prestashop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrderPrestashop;
    /**
     * @var string
     *
     * @ORM\Column(name="id_order_paypal", type="string", length=20, nullable=false)
     */
    private $idOrderPaypal;
}
