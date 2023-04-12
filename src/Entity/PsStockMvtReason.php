<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsStockMvtReason
 *
 * @ORM\Table(name="ps_stock_mvt_reason")
 * @ORM\Entity
 */
class PsStockMvtReason
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_mvt_reason", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStockMvtReason;
    /**
     * @var bool
     *
     * @ORM\Column(name="sign", type="boolean", nullable=false, options={"default"="1"})
     */
    private $sign = \true;
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
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
}
