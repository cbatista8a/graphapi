<?php

namespace CubaDevOps\GraphApi\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * PsProductDownload
 *
 * @ORM\Table(name="ps_product_download")
 * @ORM\Entity
 */
class PsProductDownload
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_download", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductDownload;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;
    /**
     * @var string|null
     *
     * @ORM\Column(name="display_filename", type="string", length=255, nullable=true)
     */
    private $displayFilename;
    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_expiration", type="datetime", nullable=true)
     */
    private $dateExpiration;
    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_days_accessible", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $nbDaysAccessible;
    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_downloadable", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $nbDownloadable = '1';
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = \true;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_shareable", type="boolean", nullable=false)
     */
    private $isShareable = '0';
}
