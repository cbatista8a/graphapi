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
 * PsRequiredField
 *
 * @ORM\Table(name="ps_required_field", indexes={@ORM\Index(name="object_name", columns={"object_name"})})
 * @ORM\Entity
 */
class PsRequiredField
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_required_field", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequiredField;
    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=32, nullable=false)
     */
    private $objectName;
    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=32, nullable=false)
     */
    private $fieldName;
}
