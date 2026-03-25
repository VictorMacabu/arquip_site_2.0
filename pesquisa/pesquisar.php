<?php

require_once __DIR__ . "/../database/ConnectDB.php";

mb_internal_encoding('UTF-8');

$q = trim($_GET['q'] ?? '');

if ($q === '') {
    $resultados = [];
    $sugestao = null;
    require_once "pagina-pesquisada.php";
    exit;
}

function normalizar($texto)
{
    $texto = strtolower($texto);
    $texto = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $texto);
    return $texto;
}

$qNormalizado = normalizar($q);

$fraseExata = false;
$frase = '';

if (preg_match('/"(.*?)"/', $q, $matches)) {
    $fraseExata = true;
    $frase = normalizar($matches[1]);
}

$termos = explode(" ", $qNormalizado);
$termos = array_filter($termos);

$stopWords = ['de', 'da', 'do', 'das', 'dos', 'e', 'a', 'o', 'para', 'por', 'em'];

$termos = array_filter($termos, function ($t) use ($stopWords) {
    return !in_array($t, $stopWords);
});

$conditions = [];
$params = [];

foreach ($termos as $i => $termo) {
    $conditions[] = "unaccent(termo) ILIKE :termo$i";
    $params[":termo$i"] = "%" . normalizar($termo) . "%";
}

$where = !empty($conditions) ? implode(" OR ", $conditions) : "1=1";

$sqlSug = "
SELECT termo
FROM \"INDICE\"
WHERE similarity(unaccent(termo), unaccent(:q)) > 0.4
ORDER BY similarity(unaccent(termo), unaccent(:q)) DESC
LIMIT 1
";

$stmtSug = $pdo->prepare($sqlSug);
$stmtSug->execute([':q' => $qNormalizado]);
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
    SELECT DISTINCT ON (pagina)
    pagina,
    trecho,
    frequencia,
    score
FROM (
    SELECT 
        pagina,
        trecho,
        COUNT(*) AS frequencia,

        SUM(
            CASE 
                WHEN unaccent(pagina) ILIKE :q THEN 10
                WHEN unaccent(trecho) ILIKE :q THEN 5
                ELSE 1
            END
        ) AS score

    FROM \"INDICE\"

    WHERE $where

    GROUP BY pagina, trecho
) sub

ORDER BY pagina, score DESC, frequencia DESC

LIMIT 50
    ";

    $stmt = $pdo->prepare($sql);

    $params[':q'] = "%" . $qNormalizado . "%";

    $stmt->execute($params);
}

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$paginasUnicas = [];
$resultadosFiltrados = [];

foreach ($resultados as $r) {
    if (!in_array($r['pagina'], $paginasUnicas)) {
        $paginasUnicas[] = $r['pagina'];
        $resultadosFiltrados[] = $r;
    }
}

$resultados = $resultadosFiltrados;

require_once "pagina-pesquisada.php";
