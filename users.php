<?php declare(strict_types=1);

use Siler\Swoole;

return function () {
    $users = [
        ['name' => 'Leo', 'author' => 'Siler'],
        ['name' => 'Salvatore', 'author' => 'Redis']
    ];
    Swoole\cors();
    Swoole\json($users);
};