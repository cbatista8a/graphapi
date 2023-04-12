<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsHomesliderSlidesLang
 *
 * @ORM\Table(name="ps_homeslider_slides_lang")
 * @ORM\Entity
 */
class PsHomesliderSlidesLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_homeslider_slides", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHomesliderSlides;
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=false)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="legend", type="string", length=255, nullable=false)
     */
    private $legend;
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;
}
