<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomerSession
 *
 * @ORM\Table(name="ps_customer_session")
 * @ORM\Entity
 */
class PsCustomerSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_session", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerSession;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCustomer;
    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=true)
     */
    private $token;
}
