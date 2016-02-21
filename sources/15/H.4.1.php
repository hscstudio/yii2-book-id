return [
    // ...
    'components' => [
        // ...
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=db,
            'username' => 'root',
            'password' => '',
            'enableSchemaCache' => true, 
            'schemaCacheDuration' => 3600,
            'schemaCache' => 'cache',
        ],
    ],
];
