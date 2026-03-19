<?php

require_once __DIR__ . "/../database/ConnectDB.php";

$q = trim($_GET['q'] ?? '');

if ($q === '') {
    echo "Digite algo para pesquisar.";
    exit;
}

$fraseExata = false;
$frase = '';

if (preg_match('/"(.*?)"/', $q, $matches)) {
    $fraseExata = true;
    $frase = $matches[1];
}

$termos = explode(" ", strtolower($q));
$termos = array_filter($termos);


$stopWords = ['de', 'da', 'do', 'das', 'dos', 'e', 'a', 'o', 'para', 'por', 'em'];

$termos = array_filter($termos, function ($t) use ($stopWords) {
    return !in_array($t, $stopWords);
});

$conditions = [];
$params = [];

foreach ($termos as $i => $termo) {
    $conditions[] = "unaccent(termo) ILIKE unaccent(:termo$i)";
    $params[":termo$i"] = "%$termo%";
}

$where = implode(" OR ", $conditions);

$sugestao = null;

$sqlSug = "
SELECT termo
FROM \"INDICE\"
WHERE similarity(unaccent(termo), unaccent(:q)) > 0.4
ORDER BY similarity(unaccent(termo), unaccent(:q)) DESC
LIMIT 1
";

$stmtSug = $pdo->prepare($sqlSug);
$stmtSug->execute([':q' => $q]);
$sugestao = $stmtSug->fetchColumn();

if ($fraseExata) {

    $sql = "
    SELECT 
        pagina,
        trecho,
        COUNT(*) AS frequencia,
        15 AS score
    FROM \"INDICE\"
    WHERE unaccent(trecho) ILIKE unaccent(:frase)
    GROUP BY pagina, trecho
    ORDER BY score DESC
    LIMIT 50
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':frase' => "%$frase%"
    ]);

} else {

    $sql = "
    SELECT 
        pagina,
        trecho,
        COUNT(*) AS frequencia,

        SUM(
            CASE 
                WHEN unaccent(pagina) ILIKE unaccent(:q) THEN 10
                WHEN unaccent(trecho) ILIKE unaccent(:q) THEN 5
                ELSE 1
            END
        ) AS score

    FROM \"INDICE\"

    WHERE $where

    GROUP BY pagina, trecho

    ORDER BY score DESC, frequencia DESC

    LIMIT 50
    ";

    $stmt = $pdo->prepare($sql);

    $params[':q'] = "%$q%";

    $stmt->execute($params);
}

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once "pagina-pesquisada.php";