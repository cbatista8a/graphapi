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
 * PsFeatureFlag
 *
 * @ORM\Table(name="ps_feature_flag", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_91700F175E237E06", columns={"name"})})
 * @ORM\Entity
 */
class PsFeatureFlag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_flag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeatureFlag;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;
    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="label_wording", type="string", length=191, nullable=false)
     */
    private $labelWording = '';
    /**
     * @var string
     *
     * @ORM\Column(name="label_domain", type="string", length=255, nullable=false)
     */
    private $labelDomain = '';
    /**
     * @var string
     *
     * @ORM\Column(name="description_wording", type="string", length=191, nullable=false)
     */
    private $descriptionWording = '';
    /**
     * @var string
     *
     * @ORM\Column(name="description_domain", type="string", length=255, nullable=false)
     */
    private $descriptionDomain = '';
}
