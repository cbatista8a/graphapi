<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderPayment
 *
 * @ORM\Table(name="ps_order_payment", indexes={@ORM\Index(name="order_reference", columns={"order_reference"})})
 * @ORM\Entity
 */
class PsOrderPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_payment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderPayment;
    /**
     * @var string|null
     *
     * @ORM\Column(name="order_reference", type="string", length=9, nullable=true)
     */
    private $orderReference;
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $amount;
    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=255, nullable=false)
     */
    private $paymentMethod;
    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';
    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=254, nullable=true)
     */
    private $transactionId;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_number", type="string", length=254, nullable=true)
     */
    private $cardNumber;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_brand", type="string", length=254, nullable=true)
     */
    private $cardBrand;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_expiration", type="string", length=7, nullable=true, options={"fixed"=true})
     */
    private $cardExpiration;
    /**
     * @var string|null
     *
     * @ORM\Column(name="card_holder", type="string", length=254, nullable=true)
     */
    private $cardHolder;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
