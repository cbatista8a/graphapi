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
namespace CubaDevOps\GraphApi\Utils;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Yaml\Yaml;

class RoutesLoader
{
    /**
     * @var string
     */
    private $config_path;
    public function __construct(string $config_path)
    {
        $this->config_path = $config_path;
    }
    /**
     * Loads a resource.
     *
     * @param string $resource The route.yml
     * @param bool $legacy_routes
     * @return array|RouteCollection
     */
    public function load($resource, $legacy_routes = \false)
    {
        $routes = new RouteCollection();
        $routingFile = $this->config_path . '/' . $resource;
        if (\file_exists($routingFile)) {
            $loadedRoutes = $this->yamlImport($routingFile);
            foreach ($loadedRoutes as $route_name => $front_route) {
                $route = new Route($front_route['path']);
                $route->setDefaults($front_route['defaults'])->setMethods($front_route['methods']);
                $routes->add($route_name, $route);
            }
        }
        return $legacy_routes ? $this->mapLegacyRoutesFromRoutesCollection($routes) : $routes;
    }
    public function yamlImport(string $routingFile)
    {
        return Yaml::parseFile($routingFile);
    }
    /**
     * @param RouteCollection $routes_collection
     * @return array
     */
    private function mapLegacyRoutesFromRoutesCollection($routes_collection)
    {
        $legacy_routes = [];
        foreach ($routes_collection->getIterator() as $route_name => $new_route) {
            $legacy_routes[$route_name] = ['controller' => $new_route->getDefault('_controller'), 'rule' => \trim($new_route->getPath(), '/'), 'keywords' => [], 'params' => ['fc' => 'module', 'module' => $new_route->getDefault('_module'), 'controller' => $new_route->getDefault('_legacy_controller') ?: $new_route->getDefault('_controller')]];
        }
        return $legacy_routes;
    }
}
