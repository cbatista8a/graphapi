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
 * PsWebservicePermission
 *
 * @ORM\Table(name="ps_webservice_permission", uniqueConstraints={@ORM\UniqueConstraint(name="resource_2", columns={"resource", "method", "id_webservice_account"})}, indexes={@ORM\Index(name="method", columns={"method"}), @ORM\Index(name="resource", columns={"resource"}), @ORM\Index(name="id_webservice_account", columns={"id_webservice_account"})})
 * @ORM\Entity
 */
class PsWebservicePermission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_permission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebservicePermission;
    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=50, nullable=false)
     */
    private $resource;
    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=0, nullable=false)
     */
    private $method;
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_account", type="integer", nullable=false)
     */
    private $idWebserviceAccount;
}
