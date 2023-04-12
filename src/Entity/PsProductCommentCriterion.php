<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentCriterion
 *
 * @ORM\Table(name="ps_product_comment_criterion")
 * @ORM\Entity
 */
class PsProductCommentCriterion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductCommentCriterion;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion_type", type="integer", nullable=false)
     */
    private $idProductCommentCriterionType;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
}
