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

use CubaDevOps\GraphApi\Application\ConfigurationRepository;
use CubaDevOps\GraphApi\Application\MigrationsLoader;
use CubaDevOps\GraphApi\Domain\FormFieldsDefinition;
use CubaDevOps\GraphApi\Domain\ValueObjects\FormField;
use CubaDevOps\GraphApi\EventSubscriber\InstallerManager;
use CubaDevOps\GraphApi\Utils\RoutesLoader;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class GraphApi extends Module implements WidgetInterface
{
    private const PREFIX = 'GAPI_';

    private $html;
    /**
     * @var ConfigurationRepository
     */
    private $config_repository;
    /**
     * @var FormFieldsDefinition
     */
    private $form_fields_definition;

    public function __construct()
    {
        $this->name = 'graphapi';
        $this->tab = 'administration';
        $this->version = '1.0.2';
        $this->author = 'CubaDevOps';
        $this->need_instance = 1;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('GraphApi Module',[],'Modules.Graphapi.Admin');
        $this->description = $this->trans('Advanced API for Prestashop development',[],'Modules.Graphapi.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall this module?',[],'Modules.Graphapi.Admin');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => '1.7.8.10');


        $this->autoload();
        $this->loadConfigurationService();
    }

    private function autoload()
    {
        if (file_exists(_PS_MODULE_DIR_ . $this->name . '/vendor/autoload.php')) {
            require_once _PS_MODULE_DIR_ . $this->name . '/vendor/autoload.php';
        }
    }


    public function install()
    {

        $installer = new InstallerManager(new MigrationsLoader());
        $installer->onInstall($this->version);

        return parent::install() &&
            $this->registerHooks();
    }

    public function registerHooks()
    {
        $hooks = [
            'header',
            'backOfficeHeader',
            'moduleRoutes'
        ];
        return $this->registerHook($hooks);
    }

    public function uninstall()
    {
        $this->deleteConfigValues();
        return parent::uninstall();
    }

    protected function deleteConfigValues()
    {
        $this->config_repository->delete($this->form_fields_definition->getFormId());
    }

    /**
     * @return FormFieldsDefinition
     */
    private function getFormFieldsDefinition(): FormFieldsDefinition
    {
        $form = $this->config_repository ? $this->config_repository->findById($this->name) : null;
        if($form){
            return $form;
        }

        $form_fields = new FormFieldsDefinition($this->name);
        $form_fields->addField(new FormField(self::PREFIX . 'ACTIVE', ''))
                    ->addField(new FormField(self::PREFIX . 'TOKEN', ''));
        return $form_fields;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        $this->renderConfigHeader();

        $this->postProcess();
        $this->html .= $this->renderForm($this->getConfigForm());

        return $this->html;
    }

    private function renderConfigHeader(): void
    {
        $this->context->smarty->assign('module_dir', $this->_path);
        $this->html = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');
    }

    /**
     * Save form data.
     */
    protected function postProcess(): void
    {
        if (Tools::isSubmit(self::PREFIX . 'SAVE_PARAMS') === true) {
            $this->saveConfigFormValues();
        }
    }

    protected function saveConfigFormValues(): void
    {
        foreach ($this->form_fields_definition->getFields() as $field) {
            $value = $field->isMultilang() ? $this->captureMultilingualValue($field->getName()) : Tools::getValue($field->getName());
            $this->form_fields_definition->updateField($field->getName(), $value);
        }
        $this->config_repository->persist($this->form_fields_definition);
        $this->html .= $this->displayConfirmation($this->trans('Form was saved!',[],'Modules.Graphapi.Admin'));
    }

    protected function captureMultilingualValue($key)
    {
        $value = [];
        foreach (Language::getIDs() as $id_lang) {
            $value[$id_lang] = Tools::getValue($key . '_' . $id_lang);
        }
        return $value;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     * @param array $form_config
     * @param string $btn_submit_name
     * @return string
     */
    protected function renderForm($form_config, $btn_submit_name = null)
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);
        $helper->identifier = $this->identifier;
        $helper->submit_action = strtoupper(self::PREFIX . ($btn_submit_name ?: 'SAVE_PARAMS'));
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->form_fields_definition->toArray(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($form_config));
    }

    /**
     * @return void
     */
    public function loadConfigurationService()
    {
        try {
            $this->config_repository = $this->get(ConfigurationRepository::class);
        } catch (Exception $e) {
            return; //avoid error on module install because services aren't load yet
        }
        $this->form_fields_definition = $this->getFormFieldsDefinition();
    }

    protected function getConfigValue($key)
    {
        /** @var FormField $field */
        $field = $this->form_fields_definition->getField($key);
        return $field->getValue();
    }

    private function getConfigForm(): array
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Settings',[],'Modules.Graphapi.Admin'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Enable',[],'Modules.Graphapi.Admin'),
                        'name' => self::PREFIX . 'ACTIVE',
                        'is_bool' => true,
                        'desc' => $this->trans('Enable or disable this module',[],'Modules.Graphapi.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->trans('Yes',[],'Modules.Graphapi.Admin')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->trans('No',[],'Modules.Graphapi.Admin')
                            )
                        ),
                    ),
                    array(
                        'col' => 4,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-key"></i>',
                        'desc' => $this->trans('Api Token',[],'Modules.Graphapi.Admin'),
                        'name' => self::PREFIX . 'TOKEN',
                        'label' => $this->trans('TOKEN',[],'Modules.Graphapi.Admin'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save',[],'Modules.Graphapi.Admin'),
                ),
            ),
        );
    }

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('configure') === $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }

    /**
     * @param $params
     * @return string[]
     * @throws Exception
     */
    public function hookModuleRoutes($params)
    {
        return $this->getFrontControllersRouting();
    }

    /**
     * Load routes automatically from config/front.yml
     *
     * @return string[]
     *
     * @throws Exception
     */
    protected function getFrontControllersRouting(): array
    {
        if (!file_exists($this->local_path . 'config/front.yml')) {
            return [];
        }
        $routingConfigLoader = new RoutesLoader($this->local_path . 'config');

        return $routingConfigLoader->load('front.yml', true);
    }

    public function renderWidget($hookName, array $configuration)
    {
        $result = $this->getWidgetVariables($hookName, $configuration);
        if (!$result) {
            return;
        }
        //render template and return
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        return [];
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}
