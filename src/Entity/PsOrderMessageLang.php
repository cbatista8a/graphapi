<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderMessageLang
 *
 * @ORM\Table(name="ps_order_message_lang")
 * @ORM\Entity
 */
class PsOrderMessageLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderMessage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;
}
