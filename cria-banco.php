<?php

declare(strict_types=1);

$dbPath = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$dbPath");
$pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY, email TEXT, password TEXT);');
