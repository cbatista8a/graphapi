<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalCapture
 *
 * @ORM\Table(name="ps_paypal_capture")
 * @ORM\Entity
 */
class PsPaypalCapture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_capture", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalCapture;
    /**
     * @var string
     *
     * @ORM\Column(name="id_capture", type="string", length=255, nullable=false)
     */
    private $idCapture;
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPaypalOrder;
    /**
     * @var string
     *
     * @ORM\Column(name="capture_amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $captureAmount;
    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=false)
     */
    private $result;
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
