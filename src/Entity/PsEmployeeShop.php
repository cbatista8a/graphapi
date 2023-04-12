<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsEmployeeShop
 *
 * @ORM\Table(name="ps_employee_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsEmployeeShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEmployee;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
