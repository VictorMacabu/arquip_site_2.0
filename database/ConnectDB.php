<?php

$host = "localhost";
$dbname = "IndexadorArquip"; 
$user = "postgres";
$password = "Sureale123.";

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