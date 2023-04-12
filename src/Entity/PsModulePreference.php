<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsModulePreference
 *
 * @ORM\Table(name="ps_module_preference", uniqueConstraints={@ORM\UniqueConstraint(name="employee_module", columns={"id_employee", "module"})})
 * @ORM\Entity
 */
class PsModulePreference
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_module_preference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulePreference;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;
    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=191, nullable=false)
     */
    private $module;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="interest", type="boolean", nullable=true)
     */
    private $interest;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="favorite", type="boolean", nullable=true)
     */
    private $favorite;
}
