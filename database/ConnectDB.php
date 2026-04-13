<?php

function getEnvValue($key)
{
    $envPath = __DIR__ . '/../.env';

    if (!file_exists($envPath)) {
        die("Arquivo .env não encontrado.");
    }

    $lines = file($envPath);

    foreach ($lines as $line) {
        $line = trim($line);

        if ($line === '' || strpos($line, '#') === 0) {
            continue;
        }

        list($envKey, $value) = explode('=', $line, 2);

        if (trim($envKey) === $key) {
            return trim($value);
        }
    }

    return null;
}

$host     = getEnvValue('DB_HOST');
$dbname   = getEnvValue('DB_NAME');
$user     = getEnvValue('DB_USER');
$password = getEnvValue('DB_PASS');

try {

    $pdo = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Erro na conexão: " . $e->getMessage();
    exit;
}