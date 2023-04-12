<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalWebhook
 *
 * @ORM\Table(name="ps_paypal_webhook")
 * @ORM\Entity
 */
class PsPaypalWebhook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_webhook", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalWebhook;
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPaypalOrder;
    /**
     * @var string
     *
     * @ORM\Column(name="id_webhook", type="string", length=255, nullable=false)
     */
    private $idWebhook;
    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=255, nullable=false)
     */
    private $eventType;
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=false)
     */
    private $data;
    /**
     * @var int
     *
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idState;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_completed", type="datetime", nullable=false)
     */
    private $dateCompleted;
}
