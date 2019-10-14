<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Model\Redis;
use Siler\Route;
use Siler\Swoole;

$server = function () {
    new Redis();
    Route\get('/users', 'users.php');
    Swoole\emit('Not found', 404);
};

Swoole\http($server)->start();
