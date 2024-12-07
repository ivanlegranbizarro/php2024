<?php

declare(strict_types=1);


function connectDB(): PDO
{
    $pdo = new PDO('sqlite:' . DB_DIR . '/db.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}


function loadSchema(PDO $pdo, string $schemaFile): void
{
    $sql = file_get_contents($schemaFile);
    if (false === $sql) {
        die('Failed to read schema file');
    }
    $pdo->exec($sql);
    echo 'Schema loaded' . PHP_EOL;
}
