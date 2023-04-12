<?php

namespace CubaDevOps\GraphApi\Migrations;

use CubaDevOps\GraphApi\Domain\Interfaces\MigrationInterface;
use Db;
class Version1_0_0 implements MigrationInterface
{
    public static function getTargetVersion() : string
    {
        return "1.0.0";
    }
    public static function up(Db $connection) : bool
    {
        return \true;
    }
    public static function down(Db $connection) : bool
    {
        return \true;
    }
}
