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
 * PsTranslation
 *
 * @ORM\Table(name="ps_translation", indexes={@ORM\Index(name="IDX_ADEBEB36BA299860", columns={"id_lang"}), @ORM\Index(name="key", columns={"domain"})})
 * @ORM\Entity
 */
class PsTranslation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_translation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTranslation;
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     */
    private $idLang;
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="text", length=65535, nullable=false)
     */
    private $key;
    /**
     * @var string
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=false)
     */
    private $translation;
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=80, nullable=false)
     */
    private $domain;
    /**
     * @var string|null
     *
     * @ORM\Column(name="theme", type="string", length=32, nullable=true)
     */
    private $theme;
}
