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
class FormField
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var mixed
     */
    private $value;
    /**
     * @var bool
     */
    private $multilang;
    public function __construct(string $name, $value, bool $multilang = \false)
    {
        $this->name = $name;
        $this->multilang = $multilang;
        $this->setValue($value);
    }
    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @return bool
     */
    public function isMultilang() : bool
    {
        return $this->multilang;
    }
    /**
     * @param mixed $value
     * @throws Exception
     */
    public function setValue($value)
    {
        if ($this->multilang && !\is_array($value)) {
            throw new Exception('An array was expected if the field is multilanguage');
        }
        $this->value = $value;
    }
}
