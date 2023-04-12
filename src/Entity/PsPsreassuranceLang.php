<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPsreassuranceLang
 *
 * @ORM\Table(name="ps_psreassurance_lang")
 * @ORM\Entity
 */
class PsPsreassuranceLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_psreassurance", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPsreassurance;
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
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;
}
