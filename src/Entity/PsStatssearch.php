<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsStatssearch
 *
 * @ORM\Table(name="ps_statssearch")
 * @ORM\Entity
 */
class PsStatssearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_statssearch", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatssearch;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = '1';
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = '1';
    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords;
    /**
     * @var int
     *
     * @ORM\Column(name="results", type="integer", nullable=false)
     */
    private $results = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
}
