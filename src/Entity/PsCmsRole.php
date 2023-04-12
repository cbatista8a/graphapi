<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCmsRole
 *
 * @ORM\Table(name="ps_cms_role", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsCmsRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_role", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCmsRole;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCms;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;
}
