<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsImageLang
 *
 * @ORM\Table(name="ps_image_lang", indexes={@ORM\Index(name="id_image", columns={"id_image"})})
 * @ORM\Entity
 */
class PsImageLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="legend", type="string", length=128, nullable=true)
     */
    private $legend;
}
