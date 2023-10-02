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
 * PsTag
 *
 * @ORM\Table(name="ps_tag", indexes={@ORM\Index(name="tag_name", columns={"name"}), @ORM\Index(name="id_lang", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTag;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;
}
