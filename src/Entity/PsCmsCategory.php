<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCmsCategory
 *
 * @ORM\Table(name="ps_cms_category", indexes={@ORM\Index(name="category_parent", columns={"id_parent"})})
 * @ORM\Entity
 */
class PsCmsCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCmsCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idParent;
    /**
     * @var bool
     *
     * @ORM\Column(name="level_depth", type="boolean", nullable=false)
     */
    private $levelDepth = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
}
