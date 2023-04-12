<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomerMessage
 *
 * @ORM\Table(name="ps_customer_message", indexes={@ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="id_customer_thread", columns={"id_customer_thread"})})
 * @ORM\Entity
 */
class PsCustomerMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerMessage;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer_thread", type="integer", nullable=true)
     */
    private $idCustomerThread;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;
    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", length=18, nullable=true)
     */
    private $fileName;
    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=true)
     */
    private $ipAddress;
    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=128, nullable=true)
     */
    private $userAgent;
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
    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=false)
     */
    private $private = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="read", type="boolean", nullable=false)
     */
    private $read = '0';
}
