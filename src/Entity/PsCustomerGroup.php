<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCustomerGroup
 *
 * @ORM\Table(name="ps_customer_group", indexes={@ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="customer_login", columns={"id_group"})})
 * @ORM\Entity
 */
class PsCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;
}
