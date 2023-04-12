<?php

namespace CubaDevOps\GraphApi\GraphQl\Infrastructure;

use CubaDevOps\Psr\Container\ContainerInterface as InternalContainerInterface;
use Psr\Container\ContainerInterface;

class PsrContainer implements InternalContainerInterface
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get(string $id)
    {
        return $this->container->get($id);
    }

    public function has(string $id)
    {
        return $this->container->has($id);
    }
}