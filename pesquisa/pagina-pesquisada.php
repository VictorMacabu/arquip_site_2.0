<?php
if (!function_exists('url')) {
    function url($page, $params = []) {
        $query = http_build_query(array_merge(['page' => $page], $params));
        return "/index.php?$query";
    }
}
?>

<link rel="stylesheet" href="/css/pesquisa.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/CSS/main-pc.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<main>
    <div class="container-pagina">

        <h2>Resultados da busca</h2>

        <?php if (empty($resultados) && !empty($sugestao) && strtolower($sugestao) !== strtolower($q)): ?>
            <p>
                Você quis dizer:
                <a href="<?= url('pesquisa', ['q' => $sugestao]) ?>">
                    <strong><?= htmlspecialchars($sugestao) ?></strong>
                </a> ?
            </p>
        <?php endif; ?>

        <p><?= count($resultados) ?> resultados encontrados</p>

        <?php foreach ($resultados as $r): ?>

            <?php
            $trecho = $r['trecho'] ?? '';
            $queryOriginal = $q ?? '';

            $termos = explode(" ", strtolower($queryOriginal));

            $pos = stripos($trecho, $queryOriginal);

            if ($pos !== false) {
                $inicio = max(0, $pos - 60);
                $snippet = substr($trecho, $inicio, 160);
            } else {
                $snippet = substr($trecho, 0, 160);
            }

            foreach ($termos as $termo) {
                if (strlen($termo) > 2) {
                    $snippet = preg_replace(
                        "/(" . preg_quote($termo, '/') . ")/i",
                        "<mark>$1</mark>",
                        $snippet
                    );
                }
            }

            $paginaSlug = pathinfo($r['pagina'], PATHINFO_FILENAME);
            ?>

            <div class="card-secao resultado-busca">

                <a href="<?= url($paginaSlug) ?>" class="titulo-resultado">
                    <?= htmlspecialchars($r['pagina']) ?>
                </a>

                <p class="info-resultado">
                    Score: <?= $r['score'] ?> | Frequência: <?= $r['frequencia'] ?>
                </p>

                <p class="trecho-resultado">
                    ...<?= $snippet ?>...
                </p>

            </div>

        <?php endforeach; ?>

    </div>
</main>