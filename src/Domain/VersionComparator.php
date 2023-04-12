<?php

namespace CubaDevOps\GraphApi\Domain;

use CubaDevOps\GraphApi\Domain\Interfaces\ComparatorInterface;

use function version_compare;

class VersionComparator implements ComparatorInterface
{
    public static function compare($value_1, $value_2, $criteria) : bool
    {
        return version_compare($value_1, $value_2, $criteria);
    }
}
