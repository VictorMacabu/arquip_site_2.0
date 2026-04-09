<?php

header('Content-Type: application/json');

require_once __DIR__ . "/../database/ConnectDB.php";

$q = $_GET['q'] ?? '';

if (strlen($q) < 2) {
    echo json_encode([]);
    exit;
}

$stopwords = ['de','da','do','das','dos','e','a','o','em','para','por','com'];

try {

    $sql = "
    SELECT 
        termo,
        termo_original,
        COUNT(*) as total
    FROM \"INDICE\"
    WHERE unaccent(termo) ILIKE unaccent(:q)
    GROUP BY termo, termo_original
    ORDER BY total DESC
    LIMIT 10
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':q' => "$q%"
    ]);

    $termos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sugestoes = [];

    foreach ($termos as $t) {

        $principal = $t['termo_original'];

        if (in_array($principal, $stopwords)) continue;

        if (!in_array($principal, $sugestoes)) {
            $sugestoes[] = $principal;
        }

        $sql2 = "
        SELECT trecho
        FROM \"INDICE\"
        WHERE termo = :termo
        LIMIT 3
        ";

        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute([
            ':termo' => $t['termo']
        ]);

        $trechos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        foreach ($trechos as $tr) {

            $palavras = preg_split('/\s+/u', $tr['trecho']);

            for ($i = 0; $i < count($palavras) - 1; $i++) {

                $p1 = mb_strtolower($palavras[$i], 'UTF-8');
                $p2 = mb_strtolower($palavras[$i+1], 'UTF-8');

                if (
                    !in_array($p1, $stopwords) &&
                    !in_array($p2, $stopwords) &&
                    str_starts_with(normalizar($p1), normalizar($q))
                ) {
                    $combo = "$p1 $p2";

                    if (!in_array($combo, $sugestoes)) {
                        $sugestoes[] = $combo;
                    }
                }
            }
        }

        if (count($sugestoes) >= 3) break;
    }

    echo json_encode(array_slice($sugestoes, 0, 3));

} catch (Exception $e) {
    echo json_encode([]);
}

function normalizar($texto)
{
    $texto = mb_strtolower($texto, 'UTF-8');

    $texto = strtr($texto, [
        'á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
        'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
        'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
        'ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
        'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
        'ç'=>'c'
    ]);

    return $texto;
}