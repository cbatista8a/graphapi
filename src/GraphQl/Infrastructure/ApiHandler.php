<?php

namespace CubaDevOps\GraphApi\GraphQl\Infrastructure;

use CubaDevOps\GraphQL\Error\DebugFlag;
use CubaDevOps\GraphQL\GraphQL;
use CubaDevOps\Psr\Container\ContainerInterface;
use CubaDevOps\Symfony\Component\Cache\Adapter\ApcuAdapter;
use CubaDevOps\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use CubaDevOps\Symfony\Component\Cache\Exception\CacheException;
use CubaDevOps\Symfony\Component\Cache\Psr16Cache;
use CubaDevOps\TheCodingMachine\GraphQLite\Context\Context;
use CubaDevOps\TheCodingMachine\GraphQLite\Schema;
use CubaDevOps\TheCodingMachine\GraphQLite\SchemaFactory;

class ApiHandler
{
    private Schema $schema;

    /**
     * @throws CacheException
     */
    public function __construct(ContainerInterface $container)
    {
        // $cache is a PSR-16 compatible cache
        // $container is a PSR-11 compatible container
        $adapter = ApcuAdapter::isSupported() ? new ApcuAdapter('graphapi', 86400) : new FilesystemAdapter('graphapi', 86400);
        $factory = new SchemaFactory(new Psr16Cache($adapter), $container);
        $factory->addControllerNamespace('CubaDevOps\\GraphApi\\GraphQl\\Application\\')
                ->addTypeNamespace('CubaDevOps\\GraphApi\\Entity\\');
        _PS_MODE_DEV_ ? $factory->devMode() : $factory->prodMode();
        $this->schema = $factory->createSchema();
    }
    public function handle($query, $variables) : array
    {
        $result = GraphQL::executeQuery($this->schema, $query, null, new Context(), $variables);
        return $result->toArray(_PS_MODE_DEV_ ? DebugFlag::INCLUDE_TRACE : DebugFlag::NONE);
    }
}
