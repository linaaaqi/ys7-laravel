<?php

namespace Losgif\YS7\Facades;

use Illuminate\Support\Facades\Facade;

class YS7 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'ys7';
    }
}