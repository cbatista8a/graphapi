<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsTag
 *
 * @ORM\Table(name="ps_tag", indexes={@ORM\Index(name="tag_name", columns={"name"}), @ORM\Index(name="id_lang", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTag;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;
}
