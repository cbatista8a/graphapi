<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderReturn
 *
 * @ORM\Table(name="ps_order_return", indexes={@ORM\Index(name="order_return_customer", columns={"id_customer"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderReturn
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_return", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderReturn;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false, options={"default"="1"})
     */
    private $state = \true;
    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=false)
     */
    private $question;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
}
