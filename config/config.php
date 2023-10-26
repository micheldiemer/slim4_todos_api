<?php

use Illuminate\Support\Env;

$config = [
    'settings' => [
        'debug' => env('APP_DEBUG', false),
        'db' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST','localhost'),
            'database' => env('DB_NAME','todolist'),
            'username' => env('DB_USER','todolist'),
            'password' => env('DB_PASS','password'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_520_ci',
            'prefix' => '',
            'options' => [
                PDO::ATTR_PERSISTENT => true
            ]
        ]
    ]
];
