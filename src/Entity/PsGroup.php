<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsGroup
 *
 * @ORM\Table(name="ps_group")
 * @ORM\Entity
 */
class PsGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reduction = '0.00';
    /**
     * @var bool
     *
     * @ORM\Column(name="price_display_method", type="boolean", nullable=false)
     */
    private $priceDisplayMethod = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="show_prices", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showPrices = \true;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;
}
