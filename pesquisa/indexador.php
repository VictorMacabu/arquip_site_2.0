<?php

require_once __DIR__ . "/../database/ConnectDB.php";

function normalizar($texto)
{
    if (!$texto) return '';

    $texto = mb_strtolower($texto, 'UTF-8');

    $texto = strtr($texto, [
        'á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
        'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
        'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
        'ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
        'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
        'ç'=>'c'
    ]);

    $texto = preg_replace('/[^a-z0-9\s]/u', '', $texto);

    return $texto;
}

$pasta = "../";
$arquivos = scandir($pasta);

foreach ($arquivos as $arquivo) {

    if (pathinfo($arquivo, PATHINFO_EXTENSION) != "php") continue;
    if ($arquivo == "index.php") continue;

    $conteudo = file_get_contents($pasta . $arquivo);
    if (!$conteudo) continue;

    $textoOriginal = strip_tags($conteudo);

    $frases = preg_split('/(?<=[.!?])\s+/', $textoOriginal);

    foreach ($frases as $frase) {

        $fraseNormalizada = normalizar($frase);

        $palavras = preg_split('/\W+/', $fraseNormalizada);

        foreach ($palavras as $palavra) {

            if (strlen($palavra) < 3) continue;

            $stmt = $pdo->prepare(
                'INSERT INTO "INDICE"(termo, pagina, trecho)
                 VALUES (?, ?, ?)'
            );

            $stmt->execute([$palavra, $arquivo, $frase]);
        }
    }
}

echo "Indexação concluída.";