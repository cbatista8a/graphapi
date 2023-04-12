<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsCategory
 *
 * @ORM\Table(name="ps_category", indexes={@ORM\Index(name="activenleft", columns={"active", "nleft"}), @ORM\Index(name="nright", columns={"nright"}), @ORM\Index(name="nleftrightactive", columns={"nleft", "nright", "active"}), @ORM\Index(name="activenright", columns={"active", "nright"}), @ORM\Index(name="level_depth", columns={"level_depth"}), @ORM\Index(name="category_parent", columns={"id_parent"})})
 * @ORM\Entity
 */
class PsCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idParent;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_default", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopDefault = '1';
    /**
     * @var bool
     *
     * @ORM\Column(name="level_depth", type="boolean", nullable=false)
     */
    private $levelDepth = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="nleft", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nleft = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="nright", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nright = '0';
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
    /**
     * @var bool
     *
     * @ORM\Column(name="is_root_category", type="boolean", nullable=false)
     */
    private $isRootCategory = '0';
}
