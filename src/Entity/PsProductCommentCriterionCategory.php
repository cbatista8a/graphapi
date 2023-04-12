<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentCriterionCategory
 *
 * @ORM\Table(name="ps_product_comment_criterion_category", indexes={@ORM\Index(name="id_category", columns={"id_category"})})
 * @ORM\Entity
 */
class PsProductCommentCriterionCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductCommentCriterion;
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;
}
