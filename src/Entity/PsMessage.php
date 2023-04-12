<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsMessage
 *
 * @ORM\Table(name="ps_message", indexes={@ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_cart", columns={"id_cart"}), @ORM\Index(name="message_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;
    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=false, options={"default"="1"})
     */
    private $private = \true;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
