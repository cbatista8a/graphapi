<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderMessage
 *
 * @ORM\Table(name="ps_order_message")
 * @ORM\Entity
 */
class PsOrderMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderMessage;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
