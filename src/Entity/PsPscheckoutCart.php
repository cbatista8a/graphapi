<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPscheckoutCart
 *
 * @ORM\Table(name="ps_pscheckout_cart")
 * @ORM\Entity
 */
class PsPscheckoutCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pscheckout_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPscheckoutCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_intent", type="string", length=20, nullable=true, options={"default"="CAPTURE"})
     */
    private $paypalIntent = 'CAPTURE';
    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_order", type="string", length=20, nullable=true)
     */
    private $paypalOrder;
    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_status", type="string", length=20, nullable=true)
     */
    private $paypalStatus;
    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_funding", type="string", length=20, nullable=true)
     */
    private $paypalFunding;
    /**
     * @var string|null
     *
     * @ORM\Column(name="paypal_token", type="text", length=16777215, nullable=true)
     */
    private $paypalToken;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paypal_token_expire", type="datetime", nullable=true)
     */
    private $paypalTokenExpire;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paypal_authorization_expire", type="datetime", nullable=true)
     */
    private $paypalAuthorizationExpire;
    /**
     * @var bool
     *
     * @ORM\Column(name="isExpressCheckout", type="boolean", nullable=false)
     */
    private $isexpresscheckout = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="isHostedFields", type="boolean", nullable=false)
     */
    private $ishostedfields = '0';
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
