<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsLangShop
 *
 * @ORM\Table(name="ps_lang_shop", indexes={@ORM\Index(name="IDX_2F43BFC7274A50A0", columns={"id_shop"}), @ORM\Index(name="IDX_2F43BFC7BA299860", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsLangShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
}
