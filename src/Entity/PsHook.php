<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsHook
 *
 * @ORM\Table(name="ps_hook", uniqueConstraints={@ORM\UniqueConstraint(name="hook_name", columns={"name"})})
 * @ORM\Entity
 */
class PsHook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hook", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHook;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;
    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false, options={"default"="1"})
     */
    private $position = \true;
}
