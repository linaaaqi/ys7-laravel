<?php

namespace Losgif\YS7;

use PHPUnit\Framework\TestCase;

class YS7ServiceProviderTest extends TestCase
{
    /**
     * @return YS7ServiceProvider
     */
    public function testGetYS7Client(): YS7ServiceProvider
    {
        return new YS7ServiceProvider(app());
    }
}
