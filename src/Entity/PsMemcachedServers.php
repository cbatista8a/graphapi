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
 * PsMemcachedServers
 *
 * @ORM\Table(name="ps_memcached_servers")
 * @ORM\Entity
 */
class PsMemcachedServers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_memcached_server", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMemcachedServer;
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=254, nullable=false)
     */
    private $ip;
    /**
     * @var int
     *
     * @ORM\Column(name="port", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $port;
    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $weight;
}
