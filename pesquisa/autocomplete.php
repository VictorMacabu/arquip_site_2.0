<?php

require_once __DIR__ . "/../database/ConnectDB.php";

$q = $_GET['q'] ?? '';

if (strlen($q) < 2) {
    echo json_encode([]);
    exit;
}

$sql = "
SELECT termo, COUNT(*) as total
FROM \"INDICE\"
WHERE unaccent(termo) ILIKE unaccent(:q)
GROUP BY termo
ORDER BY total DESC
LIMIT 5
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':q' => "%$q%"
]);

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultados);  