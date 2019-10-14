<?php

namespace Model;

use Siler\Container;
use Siler\Route;
use Siler\Swoole;

class Redis
{
    function __construct()
    {
        Redis::check();
    }

    public static function check()
    {
        $path = Swoole\request();
        Swoole\json($path);
        Container\set(Route\DID_MATCH, true);
    }
}