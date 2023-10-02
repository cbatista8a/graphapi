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

use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use CubaDevOps\GraphApi\Entity\PaymentOptionEntity;
use HookCore;
use PrestaShop\PrestaShop\Core\Hook\Hook;
use PrestaShop\PrestaShop\Core\Hook\HookDispatcher;
use PrestaShop\PrestaShop\Core\Payment\PaymentOption;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class PaymentRepository
{

    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @Query
     * @return PaymentOptionEntity[]|null
     * @throws \PrestaShopException
     */
    public function getPaymentOptions(): ?array
    {
        /** @var HookDispatcher $hook_dispatcher */
        try {
            $hook_dispatcher = $this->container->get('prestashop.core.hook.dispatcher');
            $payments = $hook_dispatcher->dispatchRendering(new Hook('paymentOptions'))->getContent();
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            /**
             * because prestashop.core.hook.dispatcher service is not yet on Front container
             */
            $payments = HookCore::exec('paymentOptions',[],null,true);
        }

        $options = [];
        foreach ($payments as $module_name => $payment){
            if (!empty($payment)) {
                /** @var PaymentOption $option */
                $option = is_array($payment) ? current($payment) : $payment;
                $options[$module_name] = new PaymentOptionEntity(
                    $option->getModuleName(),
                    $option->getAction(),
                    $option->getCallToActionText(),
                    $option->getForm(),
                    $option->getLogo(),
                    $option->isBinary(),
                    $option->getInputs(),
                    $option->getAdditionalInformation());
            }
        }
        return $options;
    }
}