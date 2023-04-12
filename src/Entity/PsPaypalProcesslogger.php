<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalProcesslogger
 *
 * @ORM\Table(name="ps_paypal_processlogger")
 * @ORM\Entity
 */
class PsPaypalProcesslogger
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_processlogger", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalProcesslogger;
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var string
     *
     * @ORM\Column(name="id_transaction", type="string", length=50, nullable=false)
     */
    private $idTransaction;
    /**
     * @var string
     *
     * @ORM\Column(name="log", type="string", length=1000, nullable=false)
     */
    private $log;
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;
    /**
     * @var bool
     *
     * @ORM\Column(name="sandbox", type="boolean", nullable=false)
     */
    private $sandbox;
    /**
     * @var string
     *
     * @ORM\Column(name="tools", type="string", length=50, nullable=false)
     */
    private $tools;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="datetime", nullable=false)
     */
    private $dateTransaction;
}
