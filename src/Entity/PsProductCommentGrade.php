<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentGrade
 *
 * @ORM\Table(name="ps_product_comment_grade", indexes={@ORM\Index(name="IDX_A01285718375853C", columns={"id_product_comment_criterion"}), @ORM\Index(name="IDX_A0128571ACF38A54", columns={"id_product_comment"})})
 * @ORM\Entity
 */
class PsProductCommentGrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductComment;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductCommentCriterion;
    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="integer", nullable=false)
     */
    private $grade;
}
