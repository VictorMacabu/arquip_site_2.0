<?php

header('Content-Type: application/json');

require_once __DIR__ . "/../database/ConnectDB.php";

$q = $_GET['q'] ?? '';

if (strlen($q) < 2) {
    echo json_encode([]);
    exit;
}

try {

    $sql = "
    SELECT termo, COUNT(*) as total
    FROM \"INDICE\"
    WHERE unaccent(termo) ILIKE unaccent(:q)
    GROUP BY termo
    ORDER BY total DESC
    LIMIT 8
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':q' => "$q%"
    ]);

    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(array_column($resultados, 'termo'));

} catch (Exception $e) {
    echo json_encode([]);
}