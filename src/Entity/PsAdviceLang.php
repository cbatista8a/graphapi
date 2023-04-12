<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsAdviceLang
 *
 * @ORM\Table(name="ps_advice_lang")
 * @ORM\Entity
 */
class PsAdviceLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdvice;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=16777215, nullable=true)
     */
    private $html;
}
