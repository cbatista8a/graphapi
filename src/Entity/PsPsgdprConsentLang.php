<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPsgdprConsentLang
 *
 * @ORM\Table(name="ps_psgdpr_consent_lang")
 * @ORM\Entity
 */
class PsPsgdprConsentLang
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
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=true)
     */
    private $message;
}
