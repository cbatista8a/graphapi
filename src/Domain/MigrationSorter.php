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

namespace CubaDevOps\GraphApi\Domain;

use CubaDevOps\GraphApi\Domain\Interfaces\MigrationInterface;
use CubaDevOps\GraphApi\Domain\ValueObjects\SortDirection;
class MigrationSorter
{
    /**
     * @var MigrationInterface[]
     */
    private $migrations;
    public function __construct(array $migrations)
    {
        $this->migrations = $migrations;
    }
    /**
     * @return array|MigrationInterface[]
     */
    public function getMigrations() : array
    {
        return $this->migrations;
    }
    public function sort(SortDirection $direction) : array
    {
        $operator = $direction->getDirection() == SortDirection::ASC ? '<' : '>';
        \usort($this->migrations, function ($a, $b) use($operator) {
            if (VersionComparator::compare($a::getTargetVersion(), $b::getTargetVersion(), '=')) {
                return 0;
            }
            return VersionComparator::compare($a::getTargetVersion(), $b::getTargetVersion(), $operator) ? -1 : 1;
        });
        return $this->migrations;
    }
}
