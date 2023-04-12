<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLog
 *
 * @ORM\Table(name="ps_log")
 * @ORM\Entity
 */
class PsLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;
    /**
     * @var bool
     *
     * @ORM\Column(name="severity", type="boolean", nullable=false)
     */
    private $severity;
    /**
     * @var int|null
     *
     * @ORM\Column(name="error_code", type="integer", nullable=true)
     */
    private $errorCode;
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;
    /**
     * @var string|null
     *
     * @ORM\Column(name="object_type", type="string", length=32, nullable=true)
     */
    private $objectType;
    /**
     * @var int|null
     *
     * @ORM\Column(name="object_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $objectId;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShop;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idShopGroup;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var bool
     *
     * @ORM\Column(name="in_all_shops", type="boolean", nullable=false)
     */
    private $inAllShops = '0';
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idEmployee;
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
