<?php

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