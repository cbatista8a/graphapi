<?php

namespace CubaDevOps\GraphApi\Entity;

use CubaDevOps\Doctrine\ORM\Mapping as ORM;
/**
 * PsPsreassurance
 *
 * @ORM\Table(name="ps_psreassurance")
 * @ORM\Entity
 */
class PsPsreassurance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_psreassurance", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPsreassurance;
    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true)
     */
    private $icon;
    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_icon", type="string", length=255, nullable=true)
     */
    private $customIcon;
    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status;
    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position;
    /**
     * @var int|null
     *
     * @ORM\Column(name="type_link", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $typeLink;
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idCms;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=true)
     */
    private $dateUpd;
}
