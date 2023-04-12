<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsPage
 *
 * @ORM\Table(name="ps_page", indexes={@ORM\Index(name="id_page_type", columns={"id_page_type"}), @ORM\Index(name="id_object", columns={"id_object"})})
 * @ORM\Entity
 */
class PsPage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;
    /**
     * @var int
     *
     * @ORM\Column(name="id_page_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPageType;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_object", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idObject;
}
