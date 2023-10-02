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

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CubaDevOps\GraphApi\Entity\PsProduct;
use CubaDevOps\GraphApi\Entity\PsProductLang;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Doctrine\ORM\EntityManagerInterface;

class ProductRepository
{
    private EntityManagerInterface $entity_manager;
    public function __construct(EntityManagerInterface $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }
    /**
     * @Query
     * @param int $id
     * @return PsProduct|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function product(int $id): ?PsProduct
    {
        return $this->entity_manager->find(PsProduct::class, $id);
    }

    /**
     * @Query
     * @return PsProduct[]
     */
    public function products():array
    {
        return $this->entity_manager->getRepository(PsProduct::class)->findAll();
    }
}
