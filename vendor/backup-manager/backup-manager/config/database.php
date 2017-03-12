<?php

return [
    'development' => [
        'type' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'pass' => 'root',
        'database' => 'test',
        'singleTransaction' => false,
        'ignoreTables' => [],
    ],
    'production' => [
        'type' => 'postgresql',
        'host' => 'localhost',
        'port' => '5432',
        'user' => 'postgres',
        'pass' => 'password',
        'database' => 'test',
    ],
];
