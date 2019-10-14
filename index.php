<?php declare(strict_types=1);

namespace App;

$base_dir = __DIR__;
require_once "$base_dir/vendor/autoload.php";

use function Siler\Swoole\{cors, http, json};

$handler = function () {
    cors();
    json('It works');
};

http($handler)->start();