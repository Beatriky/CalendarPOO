<?php

return [
    'mysql' => [
        'driver' => env('DB_DRIVER', 'pdo_mysql'),
        'host' => env('DB_HOST', 'localhost'),
        'dbname' => env('DB_DATABASE', 'tutorial'),
        'user' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', 'secret'),
        'port' => env('DB_PORT', 33066),
    ]
];