<?php

namespace CubaDevOps\GraphApi\Utils;

use Context;

trait Auth
{

    /**
     * @return bool
     */
    public static function isLoged(): bool
    {
        return Context::getContext()->customer->isLogged();
    }
}