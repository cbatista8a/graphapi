<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsLinksmenutopLang
 *
 * @ORM\Table(name="ps_linksmenutop_lang", indexes={@ORM\Index(name="id_linksmenutop", columns={"id_linksmenutop", "id_lang", "id_shop"})})
 * @ORM\Entity
 */
class PsLinksmenutopLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_linksmenutop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLinksmenutop;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=128, nullable=false)
     */
    private $link;
}
