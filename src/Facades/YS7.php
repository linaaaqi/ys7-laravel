<?php

namespace Losgif\YS7Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Losgif\YS7\Clients;
use Losgif\YS7\YS7Auth;

/**
 * Class YS7
 *
 * @method static Clients\AI\AIClient ai()             AI
 * @method static Clients\Device\DeviceClient device() 设备
 * @method static Clients\EZOpen ezopen()              ezopen
 * @method static Clients\LiveClient live()            直播
 * @method static Clients\MQ\MQClient mq()             消息
 * @method static Clients\RAM\RAMClient ram()          子账户
 * @method static Clients\TokenClient token()          令牌
 * @method static YS7Auth getAuth()                    认证
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
}
