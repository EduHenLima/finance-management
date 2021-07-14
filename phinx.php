<?php

require __DIR__ . '/vendor/autoload.php';

# Não será necessário se jogar em um .env
$db = include __DIR__ . '/config/db.php';

# Remover esse cara e jogar em um .env
list(
    'driver' => $driver,
    'host' => $host,
    'database' => $database,
    'user' => $user,
    'password' => $pass,
    'charset' => $charset,
    'collation' => $collation ) = $db['development'];

return [
    'paths' => [
        'migrations' => [
            __DIR__ . '/db/migrations'
        ],
        'seeds' => [
            __DIR__ . '/db/seeds'
        ]
    ],
    # Poderiamos remover esse cara e fazer consumir de um .env
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
            'adapter' => $driver,
            'host' => $host,
            'database' => $database,
            'user' => $user,
            'password' => $pass,
            'charset' => $charset,
            'collation' => $collation
        ]
    ]
];
