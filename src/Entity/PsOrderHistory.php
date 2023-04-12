<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderHistory
 *
 * @ORM\Table(name="ps_order_history", indexes={@ORM\Index(name="id_order_state", columns={"id_order_state"}), @ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="order_history_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderHistory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrderState;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
