<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentCriterionLang
 *
 * @ORM\Table(name="ps_product_comment_criterion_lang")
 * @ORM\Entity
 */
class PsProductCommentCriterionLang
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
}
