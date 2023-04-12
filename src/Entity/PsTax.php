<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsTax
 *
 * @ORM\Table(name="ps_tax")
 * @ORM\Entity
 */
class PsTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTax;
    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $rate;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';
}
