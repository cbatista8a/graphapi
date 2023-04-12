<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsHookAlias
 *
 * @ORM\Table(name="ps_hook_alias", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class PsHookAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hook_alias", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHookAlias;
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=191, nullable=false)
     */
    private $alias;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;
}
