<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPsgdprConsent
 *
 * @ORM\Table(name="ps_psgdpr_consent")
 * @ORM\Entity
 */
class PsPsgdprConsent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gdpr_consent", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGdprConsent;
    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModule;
    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;
    /**
     * @var int|null
     *
     * @ORM\Column(name="error", type="integer", nullable=true)
     */
    private $error;
    /**
     * @var string|null
     *
     * @ORM\Column(name="error_message", type="text", length=16777215, nullable=true)
     */
    private $errorMessage;
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
