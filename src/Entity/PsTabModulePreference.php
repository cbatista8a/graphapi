<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsTabModulePreference
 *
 * @ORM\Table(name="ps_tab_module_preference", uniqueConstraints={@ORM\UniqueConstraint(name="employee_module", columns={"id_employee", "id_tab", "module"})})
 * @ORM\Entity
 */
class PsTabModulePreference
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab_module_preference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTabModulePreference;
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     */
    private $idTab;
    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=191, nullable=false)
     */
    private $module;
}
