<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsTagCount
 *
 * @ORM\Table(name="ps_tag_count", indexes={@ORM\Index(name="id_group", columns={"id_group", "id_lang", "id_shop", "counter"})})
 * @ORM\Entity
 */
class PsTagCount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_tag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTag = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="counter", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $counter = '0';
}
