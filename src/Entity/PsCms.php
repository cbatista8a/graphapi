<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsCms
 *
 * @ORM\Table(name="ps_cms")
 * @ORM\Entity
 */
class PsCms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCms;
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCmsCategory;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';
    /**
     * @var bool
     *
     * @ORM\Column(name="indexation", type="boolean", nullable=false, options={"default"="1"})
     */
    private $indexation = \true;
}
