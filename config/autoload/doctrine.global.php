<?php
// TODO: Конечно конфиг подключения надо выносить, но для сокращения времени рпедоставления примера, я захардкодил это
// TODO: И я не стал возится с докеризацией mysql, а использовал db4free.net.
return [
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\Mysqli\Driver',
                'params' => [
                    'host' => 'db4free.net',
                    'port' => 3306,
                    'user' => 'evtuhovdo',
                    'password' => 'root4455112233',
                    'dbname' => 'zf3_test_app',
                ]
            ]
        ],
        // Configuration details for the ORM.
        // See http://docs.doctrine-project.org/en/latest/reference/configuration.html
        'configuration' => [
            // Configuration for service `doctrine.configuration.orm_default` service
            'orm_default' => [
                // metadata cache instance to use. The retrieved service name will
                // be `doctrine.cache.$thisSetting`
                'metadata_cache' => 'filesystem',

                // DQL queries parsing cache instance to use. The retrieved service
                // name will be `doctrine.cache.$thisSetting`
                'query_cache' => 'array',

                // ResultSet cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'result_cache' => 'array',

                // Hydration cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'hydration_cache' => 'array',

                // Generate proxies automatically (turn off for production)
                'generate_proxies' => false,

                // directory where proxies will be stored. By default, this is in
                // the `data` directory of your application
                'proxy_dir' => './data/DoctrineORMModule/Proxy',

                // namespace for generated proxy classes
                'proxy_namespace' => 'DoctrineORMModule\Proxy',
            ]
        ],
        'cache' => [
            'filesystem' => [
                'directory' => './data/DoctrineORMModule/cache',
                'namespace' => 'DoctrineModule',
            ],
        ],
        'migrations_configuration' => [
            'orm_default' => [
                'directory' => './migrations/Doctrine',
                'name' => 'Zf3 Test App Migrations',
                'namespace' => 'DoctrineMigrations',
                'table' => 'doctrine_migration_versions',
                'column' => 'version',
            ],
        ],
    ],
];