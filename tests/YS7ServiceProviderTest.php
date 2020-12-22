<?php

namespace Losgif\YS7Laravel\Tests;

use Losgif\YS7Laravel\YS7Auth;
use Losgif\YS7Laravel\YS7Client;
use PHPUnit\Framework\TestCase;

/**
 * Class YS7ServiceProviderTest
 *
 * @package Losgif\YS7Laravel\Tests
 */
class YS7ServiceProviderTest extends TestCase
{
    /**
     * @return \Losgif\YS7Laravel\YS7Client
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testGetYS7Client(): YS7Client
    {
        $appKey = config('ys7.app_key');
        $appSecret = config('ys7.app_secret');

        $auth = new YS7Auth($appKey, $appSecret);

        return new YS7Client($auth);
    }
}
