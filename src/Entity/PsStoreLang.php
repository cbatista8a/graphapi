<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsStoreLang
 *
 * @ORM\Table(name="ps_store_lang")
 * @ORM\Entity
 */
class PsStoreLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_store", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idStore;
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=255, nullable=false)
     */
    private $address1;
    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true)
     */
    private $address2;
    /**
     * @var string|null
     *
     * @ORM\Column(name="hours", type="text", length=65535, nullable=true)
     */
    private $hours;
    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;
}
