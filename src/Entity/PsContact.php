<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsContact
 *
 * @ORM\Table(name="ps_contact")
 * @ORM\Entity
 */
class PsContact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    /**
     * @var bool
     *
     * @ORM\Column(name="customer_service", type="boolean", nullable=false)
     */
    private $customerService = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false)
     */
    private $position = '0';
}
