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

namespace CubaDevOps\GraphApi\Application;

use Configuration;
use Context;
use CubaDevOps\GraphApi\Domain\FormFieldsDefinition;
class ConfigurationRepository
{
    /**
     * @var Context
     */
    private $context;
    /**
     * @var int|null
     */
    private $shop_group;
    /**
     * @var int|null
     */
    private $shop_id;
    /*
     * Todo inject prestashop.adapter.legacy.configuration service once fully migrated
     * */
    public function __construct(Context $context)
    {
        $this->context = $context;
        $this->shop_group = $context->shop->getContextShopGroupID(\true);
        $this->shop_id = $this->context->shop->id;
    }
    public function getModuleName()
    {
        return 'graphapi';
    }
    public function persist(FormFieldsDefinition $form)
    {
        /* we use base64 for avoid errors on unserialize because database field is not blob */
        Configuration::updateValue($form->getFormId(), \base64_encode(\serialize($form)), \false, $this->shop_group, $this->shop_id);
    }
    /**
     * @param string $form_id
     * @return FormFieldsDefinition|null
     */
    public function findById(string $form_id)
    {
        $data = Configuration::get($form_id, null, $this->shop_group, $this->shop_id);
        return $data ? \unserialize(\base64_decode($data)) : null;
    }
    public function delete(string $form_id) : bool
    {
        return Configuration::deleteByName($form_id);
    }
}
