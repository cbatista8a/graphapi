<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsAlias
 *
 * @ORM\Table(name="ps_alias", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class PsAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_alias", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlias;
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=191, nullable=false)
     */
    private $alias;
    /**
     * @var string
     *
     * @ORM\Column(name="search", type="string", length=255, nullable=false)
     */
    private $search;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
}
