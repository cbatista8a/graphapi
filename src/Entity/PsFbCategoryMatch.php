<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsFbCategoryMatch
 *
 * @ORM\Table(name="ps_fb_category_match", indexes={@ORM\Index(name="id_category", columns={"id_category", "google_category_id"})})
 * @ORM\Entity
 */
class PsFbCategoryMatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;
    /**
     * @var int
     *
     * @ORM\Column(name="google_category_id", type="integer", nullable=false)
     */
    private $googleCategoryId;
    /**
     * @var string
     *
     * @ORM\Column(name="google_category_name", type="string", length=255, nullable=false)
     */
    private $googleCategoryName;
    /**
     * @var int
     *
     * @ORM\Column(name="google_category_parent_id", type="integer", nullable=false)
     */
    private $googleCategoryParentId;
    /**
     * @var string
     *
     * @ORM\Column(name="google_category_parent_name", type="string", length=255, nullable=false)
     */
    private $googleCategoryParentName;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_parent_category", type="boolean", nullable=true)
     */
    private $isParentCategory;
}
