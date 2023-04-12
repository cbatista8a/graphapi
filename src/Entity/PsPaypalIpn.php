<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalIpn
 *
 * @ORM\Table(name="ps_paypal_ipn")
 * @ORM\Entity
 */
class PsPaypalIpn
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_ipn", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalIpn;
    /**
     * @var string
     *
     * @ORM\Column(name="id_transaction", type="string", length=255, nullable=false)
     */
    private $idTransaction;
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;
    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
