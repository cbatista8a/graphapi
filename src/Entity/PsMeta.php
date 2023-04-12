<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsMeta
 *
 * @ORM\Table(name="ps_meta", uniqueConstraints={@ORM\UniqueConstraint(name="page", columns={"page"})})
 * @ORM\Entity
 */
class PsMeta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_meta", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMeta;
    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=64, nullable=false)
     */
    private $page;
    /**
     * @var bool
     *
     * @ORM\Column(name="configurable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $configurable = \true;
}
