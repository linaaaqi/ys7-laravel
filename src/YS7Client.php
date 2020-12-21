<?php

namespace Losgif\YS7Laravel;

class YS7Client extends \Losgif\YS7\YS7Client
{
    /**
     * YS7Client constructor.
     *
     * @param  \Losgif\YS7Laravel\YS7Auth  $auth
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct(YS7Auth $auth)
    {
        parent::__construct($auth);
        $auth->initAccessToken($this);
    }
}
