<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsProductComment
 *
 * @ORM\Table(name="ps_product_comment")
 * @ORM\Entity
 */
class PsProductComment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductComment;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     */
    private $idProduct;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false)
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false)
     */
    private $idGuest;
    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=64, nullable=false)
     */
    private $customerName;
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;
    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="integer", nullable=false)
     */
    private $grade;
    /**
     * @var bool
     *
     * @ORM\Column(name="validate", type="boolean", nullable=false)
     */
    private $validate;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
