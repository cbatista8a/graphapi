<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsSpecificPricePriority
 *
 * @ORM\Table(name="ps_specific_price_priority", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsSpecificPricePriority
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_priority", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSpecificPricePriority;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;
    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=80, nullable=false)
     */
    private $priority;
}
