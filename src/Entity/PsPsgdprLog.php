<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPsgdprLog
 *
 * @ORM\Table(name="ps_psgdpr_log", indexes={@ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="idx_id_customer", columns={"id_customer", "id_guest", "client_name", "id_module", "date_add", "date_upd"})})
 * @ORM\Entity
 */
class PsPsgdprLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gdpr_log", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGdprLog;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idGuest;
    /**
     * @var string|null
     *
     * @ORM\Column(name="client_name", type="string", length=250, nullable=true)
     */
    private $clientName;
    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idModule;
    /**
     * @var int
     *
     * @ORM\Column(name="request_type", type="integer", nullable=false)
     */
    private $requestType;
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
