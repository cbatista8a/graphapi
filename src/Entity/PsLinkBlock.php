<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLinkBlock
 *
 * @ORM\Table(name="ps_link_block")
 * @ORM\Entity
 */
class PsLinkBlock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_link_block", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLinkBlock;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_hook", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idHook;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;
}
