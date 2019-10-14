<?php declare(strict_types=1);

namespace App;

$base_dir = __DIR__;
require_once "$base_dir/vendor/autoload.php";

use function Siler\Swoole\cors;
use function Siler\Swoole\http;
use function Siler\Swoole\json;

$handler = function () {
    cors();
    json('It works');
};

http($handler)->start();