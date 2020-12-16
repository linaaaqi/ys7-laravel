<?php

namespace Losgif\YS7;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class YS7ServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * 启动应用服务
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/ys7.php' => config_path('ys7.php'),
        ]);
    }

    /**
     * 注册服务提供者
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/ys7.php',
            'ys7'
        );

        $this->app->instance(YS7Client::class, function () {
            $appKey = config('ys7.app_key');
            $appSecret = config('ys7.app_secret');

            $auth = new YS7Auth($appKey, $appSecret);

            return new YS7Client($auth);
        });

        $this->app->alias(YS7Client::class, 'ys7client');
    }

    /**
     * 服务提供者配置
     *
     * @return array|string[]
     */
    public function provides(): array
    {
        return [
            YS7Client::class, 'ys7client'
        ];
    }
}
