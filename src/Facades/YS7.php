<?php

namespace Losgif\YS7Laravel\Facades;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use Losgif\YS7\Clients\Device\DeviceClient;

/**
 * Class YS7
 *
 * @property DeviceClient $device
 *
 * @package Losgif\YS7Laravel\Facades
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
    public static function auth(): Application
    {
        return app('ys7.auth');
    }
}
