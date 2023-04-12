<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductCommentReport
 *
 * @ORM\Table(name="ps_product_comment_report", indexes={@ORM\Index(name="IDX_C2608AB0ACF38A54", columns={"id_product_comment"})})
 * @ORM\Entity
 */
class PsProductCommentReport
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
}
