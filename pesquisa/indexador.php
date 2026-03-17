<?php

require_once __DIR__ . "/../database/ConnectDB.php";

function normalizar($texto) {

    if(!$texto) return '';

    $texto = strtolower($texto);
    
    $texto = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $texto);

    $texto = preg_replace('/[^a-z0-9\s]/', '', $texto);

    return $texto;
}

$pasta = "../";
$arquivos = scandir($pasta);

foreach ($arquivos as $arquivo) {

    if(pathinfo($arquivo, PATHINFO_EXTENSION) != "php") continue;
    if($arquivo == "index.php") continue;

    $conteudo = file_get_contents($pasta.$arquivo);

    if(!$conteudo) continue;

    $texto = normalizar(strip_tags($conteudo));

    $palavras = preg_split('/\W+/', $texto);

    foreach ($palavras as $palavra) {

        if(strlen($palavra) < 4) continue;

        $stmt = $pdo->prepare(
        'INSERT INTO "INDICE"(termo,pagina,trecho)
         VALUES (?,?,?)'
        );

        $stmt->execute([$palavra,$arquivo,$texto]);
    }
}

echo "Indexação concluída.";