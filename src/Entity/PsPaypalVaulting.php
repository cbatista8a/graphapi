<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsPaypalVaulting
 *
 * @ORM\Table(name="ps_paypal_vaulting")
 * @ORM\Entity
 */
class PsPaypalVaulting
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paypal_vaulting", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaypalVaulting;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var string
     *
     * @ORM\Column(name="rememberedCards", type="string", length=255, nullable=false)
     */
    private $rememberedcards;
    /**
     * @var string
     *
     * @ORM\Column(name="profile_key", type="string", length=255, nullable=false)
     */
    private $profileKey;
    /**
     * @var bool
     *
     * @ORM\Column(name="sandbox", type="boolean", nullable=false)
     */
    private $sandbox;
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
