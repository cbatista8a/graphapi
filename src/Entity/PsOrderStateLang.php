<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsOrderStateLang
 *
 * @ORM\Table(name="ps_order_state_lang")
 * @ORM\Entity
 */
class PsOrderStateLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderState;
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=64, nullable=false)
     */
    private $template;
}
