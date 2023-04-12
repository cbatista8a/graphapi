<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLinkBlockLang
 *
 * @ORM\Table(name="ps_link_block_lang")
 * @ORM\Entity
 */
class PsLinkBlockLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_link_block", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLinkBlock;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name = '';
    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_content", type="text", length=16777215, nullable=true)
     */
    private $customContent;
}
