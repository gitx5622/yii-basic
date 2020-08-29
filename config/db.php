<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=db:3307;dbname=docker-test',
    'username' => 'root',
    'password' => '1165',
    'charset' => 'utf8',
    'attributes' => [PDO::ATTR_CASE => PDO::CASE_LOWER],
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
