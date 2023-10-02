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
 * PsShopUrl
 *
 * @ORM\Table(name="ps_shop_url", indexes={@ORM\Index(name="IDX_279F19DA274A50A0", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsShopUrl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_url", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     */
    private $idShop;
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=150, nullable=false)
     */
    private $domain;
    /**
     * @var string
     *
     * @ORM\Column(name="domain_ssl", type="string", length=150, nullable=false)
     */
    private $domainSsl;
    /**
     * @var string
     *
     * @ORM\Column(name="physical_uri", type="string", length=64, nullable=false)
     */
    private $physicalUri;
    /**
     * @var string
     *
     * @ORM\Column(name="virtual_uri", type="string", length=64, nullable=false)
     */
    private $virtualUri;
    /**
     * @var bool
     *
     * @ORM\Column(name="main", type="boolean", nullable=false)
     */
    private $main;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;
}
