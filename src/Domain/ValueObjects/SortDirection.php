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

namespace CubaDevOps\GraphApi\Domain\ValueObjects;

use Exception;

class SortDirection
{
    const ASC = 1;
    const DESC = 2;
    /**
     * @var int
     */
    private $direction;
    /**
     * @param int $direction | 1 = ASC, 2 = DESC
     * @throws Exception
     */
    public function __construct(int $direction)
    {
        $this->setDirection($direction);
    }
    /**
     * @return int
     */
    public function getDirection() : int
    {
        return $this->direction;
    }
    /**
     * @param int $direction
     * @throws Exception
     */
    private function setDirection(int $direction)
    {
        if (!\in_array($direction, [self::ASC, self::DESC], \true)) {
            throw new Exception("Wrong sorter direction");
        }
        $this->direction = $direction;
    }
}
