<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentUsefulness
 *
 * @ORM\Table(name="ps_product_comment_usefulness", indexes={@ORM\Index(name="IDX_49A8F246ACF38A54", columns={"id_product_comment"})})
 * @ORM\Entity
 */
class PsProductCommentUsefulness
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductComment;
    /**
     * @var bool
     *
     * @ORM\Column(name="usefulness", type="boolean", nullable=false)
     */
    private $usefulness;
}
