<?php
/**
 * Copyright since 2020 CubaDevOps
 *
 * @Author : Carlos Batista <carlos.batista@cubadevops.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

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
