<?php

namespace Losgif\YS7\Facades;

use Illuminate\Support\Facades\Facade;
use Neteast\YS7\Clients\Device\DeviceClient;

/**
 * Class YS7
 *
 * @method static DeviceClient device()
 *
 * @package Losgif\YS7\Facades
 */
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     */
    public static function auth()
    {
        return app('ys7.auth');
    }
}
