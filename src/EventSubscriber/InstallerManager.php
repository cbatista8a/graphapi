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

namespace CubaDevOps\GraphApi\EventSubscriber;

use CubaDevOps\GraphApi\Application\MigrationsLoader;
use CubaDevOps\GraphApi\Domain\Interfaces\MigrationInterface;
use CubaDevOps\GraphApi\Domain\ValueObjects\SortDirection;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use PrestaShopBundle\Event\ModuleManagementEvent;
use Db;

class InstallerManager implements EventSubscriberInterface
{
    const UP = 1;
    const DOWN = 2;
    /**
     * @var MigrationsLoader
     */
    private $migrations_loader;
    public function __construct(MigrationsLoader $migrations_loader)
    {
        $this->migrations_loader = $migrations_loader;
    }
    /**
     * @param MigrationInterface[] $migrations
     * @param int $operation
     * @return bool
     */
    private function executeMigrations(array $migrations, int $operation = self::UP) : bool
    {
        $db = Db::getInstance();
        $result = \true;
        foreach ($migrations as $migration) {
            $result = $result && ($operation == self::UP ? $migration::up($db) : $migration::down($db));
        }
        return $result;
    }
    public static function getSubscribedEvents() : array
    {
        return [ModuleManagementEvent::UNINSTALL => 'onUninstall', ModuleManagementEvent::UPGRADE => 'onUpgrade'];
    }
    public function onUninstall(ModuleManagementEvent $event)
    {
        $module = $event->getModule();
        if ('graphapi' === $module->get('name')) {
            $migrations = $this->migrations_loader->filterByVersion($module->get('version'), '<=', new SortDirection(SortDirection::DESC));
            return $this->executeMigrations($migrations, self::DOWN);
        }
    }
    public function onUpgrade(ModuleManagementEvent $event)
    {
        $module = $event->getModule();
        if ('graphapi' === $module->get('name')) {
            $migrations = $this->migrations_loader->filterByVersion($module->get('version_available'), '=', new SortDirection(SortDirection::ASC));
            return $this->executeMigrations($migrations);
        }
    }
    /**
     * This method is not called from ModuleManagementEvent::INSTALL Event because services wasn't load yet when module in not active
     * @param string $version
     * @return bool
     */
    public function onInstall(string $version) : bool
    {
        $migrations = $this->migrations_loader->filterByVersion($version, '<=', new SortDirection(SortDirection::ASC));
        return $this->executeMigrations($migrations);
    }
}
