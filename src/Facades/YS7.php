<?php

namespace Losgif\YS7Laravel\Facades;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use Losgif\YS7\Clients;

/**
 * Class YS7
 *
 * @property Clients\AI\AIClient         $ai     AI
 * @property Clients\Device\DeviceClient $device 设备
 * @property Clients\EZOpen              $ezopen ezopen
 * @property Clients\LiveClient          $live   直播
 * @property Clients\MQ\MQClient         $mq     消息
 * @property Clients\RAM\RAMClient       $ram    子账户
 * @property Clients\TokenClient         $token  令牌
 *
 * @method Clients\AI\AIClient ai()
 * @method Clients\Device\DeviceClient device()
 * @method Clients\EZOpen ezopen()
 * @method Clients\LiveClient live()
 * @method Clients\MQ\MQClient mq()
 * @method Clients\RAM\RAMClient ram()
 * @method Clients\TokenClient token()
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
     * @return \Illuminate\Contracts\Foundation\Application|\Losgif\YS7Laravel\YS7Auth|mixed
     */
    public static function auth(): Application
    {
        return app('ys7.auth');
    }
}
