<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsAdminFilter
 *
 * @ORM\Table(name="ps_admin_filter", uniqueConstraints={@ORM\UniqueConstraint(name="admin_filter_search_id_idx", columns={"employee", "shop", "controller", "action", "filter_id"})})
 * @ORM\Entity
 */
class PsAdminFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="employee", type="integer", nullable=false)
     */
    private $employee;
    /**
     * @var int
     *
     * @ORM\Column(name="shop", type="integer", nullable=false)
     */
    private $shop;
    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=60, nullable=false)
     */
    private $controller;
    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=100, nullable=false)
     */
    private $action;
    /**
     * @var string
     *
     * @ORM\Column(name="filter", type="text", length=0, nullable=false)
     */
    private $filter;
    /**
     * @var string
     *
     * @ORM\Column(name="filter_id", type="string", length=191, nullable=false)
     */
    private $filterId;
}
