<?php

declare(strict_types=1);

function createDb(){
    $dbFile = __DIR__ . '/banco.sqlite';

    if (!is_file($dbFile)){
        fopen($dbFile, 'w+');
        $pdo = new PDO("sqlite:$dbFile");
        $pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY, url TEXT, title TEXT, image_path TEXT)');
        $pdo->exec('CREATE TABLE users (id INTEGER PRIMARY KEY, email TEXT, password TEXT);');
        fclose(STDIN);
    };

    exit();

}

createDb();