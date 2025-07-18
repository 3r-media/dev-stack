<?php

namespace Rrr\DevStack\Facades;

use Illuminate\Support\Facades\Facade;

class DevStack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dev-stack';
    }
}
