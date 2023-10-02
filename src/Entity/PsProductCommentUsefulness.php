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
 * PsProductCommentUsefulness
 *
 * @ORM\Table(name="ps_product_comment_usefulness", indexes={@ORM\Index(name="IDX_49A8F246ACF38A54", columns={"id_product_comment"})})
 * @ORM\Entity
 */
class PsProductCommentUsefulness
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductComment;
    /**
     * @var bool
     *
     * @ORM\Column(name="usefulness", type="boolean", nullable=false)
     */
    private $usefulness;
}
