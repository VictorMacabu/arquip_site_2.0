<?php
mb_internal_encoding('UTF-8');

if (!function_exists('url')) {
    function url($page, $params = [])
    {
        $query = http_build_query(array_merge(['page' => $page], $params));
        return "/index.php?$query";
    }
}

function normalizar($texto)
{
    if (!$texto) return '';

    $texto = mb_strtolower($texto, 'UTF-8');

    $texto = strtr($texto, [
        'á' => 'a',
        'à' => 'a',
        'ã' => 'a',
        'â' => 'a',
        'ä' => 'a',
        'é' => 'e',
        'è' => 'e',
        'ê' => 'e',
        'ë' => 'e',
        'í' => 'i',
        'ì' => 'i',
        'î' => 'i',
        'ï' => 'i',
        'ó' => 'o',
        'ò' => 'o',
        'õ' => 'o',
        'ô' => 'o',
        'ö' => 'o',
        'ú' => 'u',
        'ù' => 'u',
        'û' => 'u',
        'ü' => 'u',
        'ç' => 'c'
    ]);

    return $texto;
}

function termoParaRegex($termo)
{
    $map = [
        'a' => '[aáàãâä]',
        'e' => '[eéèêë]',
        'i' => '[iíìîï]',
        'o' => '[oóòõôö]',
        'u' => '[uúùûü]',
        'c' => '[cç]'
    ];

    $termo = normalizar($termo);
    $regex = '';

    foreach (mb_str_split($termo) as $char) {
        $regex .= $map[$char] ?? $char;
    }

    return $regex;
}
?>

<link rel="stylesheet" href="/css/pesquisa.css">

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

        <p><?= count($resultados ?? []) ?> resultados encontrados</p>

        <?php if (!empty($resultados)): ?>

            <?php
            $paginas = [];
            ?>

            <?php foreach ($resultados as $r): ?>

                <?php
                if (in_array($r['pagina'], $paginas)) continue;
                $paginas[] = $r['pagina'];

                $trecho = $r['trecho'] ?? '';
                $queryOriginal = $q ?? '';

                $termos = explode(" ", normalizar($queryOriginal));
                $trechoNormalizado = normalizar($trecho);

                $pos = null;

                foreach ($termos as $t) {
                    if (strlen($t) < 3) continue;

                    $p = strpos($trechoNormalizado, $t);
                    if ($p !== false) {
                        $pos = $p;
                        break;
                    }
                }

                if ($pos !== null) {
                    $inicio = max(0, $pos - 80);
                    $snippet = mb_substr($trecho, $inicio, 300);
                } else {
                    $snippet = mb_substr($trecho, 0, 300);
                }

                foreach ($termos as $termo) {

                    if (strlen($termo) < 3) continue;

                    $snippet = preg_replace_callback(
                        '/\b\p{L}+\b/u',
                        function ($match) use ($termo) {
                            $palavra = $match[0];

                            if (normalizar($palavra) === $termo) {
                                return "<mark>$palavra</mark>";
                            }

                            return $palavra;
                        },
                        $snippet
                    );
                }

                $paginaSlug = pathinfo($r['pagina'], PATHINFO_FILENAME);

                $mapaTitulos = [
                    'quem-somos' => 'Quem Somos',
                    'historico' => 'Histórico',
                    'historia' => 'História',
                    'legislacoes' => 'Legislações',
                    'orientacao' => 'Orientação às EDOCs',
                    'gestao-documental' => 'Gestão Documental'
                ];

                $titulo = $mapaTitulos[$paginaSlug]
                    ?? ucwords(str_replace('-', ' ', $paginaSlug));
                ?>

                <div class="card-secao resultado-busca">

                    <a href="<?= url($paginaSlug) ?>" class="titulo-resultado">
                        <?= htmlspecialchars($titulo) ?>
                    </a>

                    <p class="info-resultado">
                        Frequência: <?= $r['frequencia'] ?? 0 ?>
                    </p>

                    <p class="trecho-resultado">
                        ...<?= $snippet ?>...
                    </p>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Nenhum resultado encontrado.</p>

        <?php endif; ?>

    </div>
</main>