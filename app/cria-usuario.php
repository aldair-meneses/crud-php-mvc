<?php

declare(strict_types=1);

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

echo "Digite seu E-mail: ";
$email = trim(fgets(STDIN));

echo "Digite sua senha: ";
$password  = trim(fgets(STDIN));

echo "\nAqui estão suas credenciais: " . PHP_EOL . "E-mail: $email" .  PHP_EOL . "Senha: $password" . PHP_EOL;

$hash = password_hash($password, PASSWORD_ARGON2ID);

$sql = 'INSERT INTO users (email, password) VALUES (?, ?);';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $email);
$statement->bindValue(2, $hash);
$statement->execute();
