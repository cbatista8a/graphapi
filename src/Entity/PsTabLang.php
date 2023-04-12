<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsTabLang
 *
 * @ORM\Table(name="ps_tab_lang", indexes={@ORM\Index(name="IDX_CFD9262DBA299860", columns={"id_lang"}), @ORM\Index(name="IDX_CFD9262DED47AB56", columns={"id_tab"})})
 * @ORM\Entity
 */
class PsTabLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTab;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;
}
