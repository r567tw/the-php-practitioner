<?php 

return [
    'database' => [
        'dbname'=> 'mytodo',
        'username' => 'root',
        'password' => 'password',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
            // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ]
    ]
];