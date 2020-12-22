<?php

namespace Losgif\YS7Laravel;

use Illuminate\Support\Facades\Cache;

/**
 * Class YS7Auth
 *
 * @package Losgif\YS7Laravel
 */
class YS7Auth extends \Losgif\YS7\YS7Auth
{
    /**
     * Access Token Name
     */
    private const ACCESS_TOKEN_NAME = 'access_token';

    /**
     * @param  \Losgif\YS7\YS7Client  $client
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function initAccessToken(\Losgif\YS7\YS7Client $client): void
    {
        $cachePrefix = config('ys7.access_token_cache_prefix');

        $accessToken = Cache::get($cachePrefix . self::ACCESS_TOKEN_NAME);

        if (empty($accessToken)) {
            $accessToken = $client->token()->getToken($this)->getAccessToken();
            Cache::put($cachePrefix . self::ACCESS_TOKEN_NAME, $accessToken, $this->getValidDays());
        }

        $this->setAccessToken($accessToken);
    }

    /**
     * 获取Access Token有限时间
     *
     * @return float|int
     */
    public function getValidDays()
    {
        $validDays = config('ys7.access_token_valid_days');

        return $validDays * 24 * 60 * 60;
    }
}
