<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsTab
 *
 * @ORM\Table(name="ps_tab")
 * @ORM\Entity
 */
class PsTab
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTab;
    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false)
     */
    private $idParent;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;
    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=64, nullable=true)
     */
    private $module;
    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=64, nullable=false)
     */
    private $className;
    /**
     * @var string|null
     *
     * @ORM\Column(name="route_name", type="string", length=256, nullable=true)
     */
    private $routeName;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;
    /**
     * @var bool
     *
     * @ORM\Column(name="hide_host_mode", type="boolean", nullable=false)
     */
    private $hideHostMode;
    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=32, nullable=true)
     */
    private $icon;
    /**
     * @var string|null
     *
     * @ORM\Column(name="wording", type="string", length=255, nullable=true)
     */
    private $wording;
    /**
     * @var string|null
     *
     * @ORM\Column(name="wording_domain", type="string", length=255, nullable=true)
     */
    private $wordingDomain;
}
