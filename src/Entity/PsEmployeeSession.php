<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsEmployeeSession
 *
 * @ORM\Table(name="ps_employee_session")
 * @ORM\Entity
 */
class PsEmployeeSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee_session", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployeeSession;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idEmployee;
    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=true)
     */
    private $token;
}
