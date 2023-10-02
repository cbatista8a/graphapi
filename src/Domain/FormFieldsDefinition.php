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

use ArrayObject;
use CubaDevOps\GraphApi\Domain\ValueObjects\FormField;
class FormFieldsDefinition
{
    /**
     * @var FormField[]
     */
    private $fields;
    /**
     * @var string
     */
    private $form_id;
    public function __construct(string $form_id)
    {
        $this->fields = new ArrayObject();
        $this->form_id = $form_id;
    }
    /**
     * @return array|FormField[]
     */
    public function getFields() : array
    {
        return $this->fields->getArrayCopy();
    }
    public function addField(FormField $field) : self
    {
        $this->fields->offsetSet($field->getName(), $field);
        return $this;
    }
    public function updateField(string $field_name, $value) : self
    {
        if ($this->fields->offsetExists($field_name)) {
            $this->fields->offsetGet($field_name)->setValue($value);
        }
        return $this;
    }
    public function removeField(FormField $field) : self
    {
        $this->fields->offsetUnset($field->getName());
        return $this;
    }
    public function getField(string $field_name)
    {
        return $this->fields->offsetGet($field_name);
    }
    /**
     * @return string
     */
    public function getFormId() : string
    {
        return $this->form_id;
    }
    public function toArray() : array
    {
        $data = [];
        foreach ($this->fields->getIterator() as $item) {
            $data[$item->getName()] = $item->getValue();
        }
        return $data;
    }
}
