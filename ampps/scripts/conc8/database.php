<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'concrete_pdo_mysql',
            'server' => '[[softdbhost]]',
            'database' => '[[softdb]]',
            'username' => '[[softdbuser]]',
            'password' => '[[softdbpass]]',
            'character_set' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],
    ],
];
