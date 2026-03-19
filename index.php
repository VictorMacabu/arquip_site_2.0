<?php

$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home',
    'gestao-documental',
    'quem-somos',
    'estrutura-organizacional',
    'legislacoes',
    'pesquisa-processo',
    'portal-processos',
    'consulta-processo',
    'acesso-acervo',
    'orientacao',
    'agorasei',
    'digitasampa',
    'diario-oficial',
    'historia',
    'historico',
    'mapa-site',
    'sistemas-arquivos',
    'pesquisa'
];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

if ($page === 'pesquisa') {

    require_once __DIR__ . '/controllers/PesquisaController.php';

    $q = $_GET['q'] ?? '';

    $resultados = [];
    $sugestao = null;

    if (!empty($q)) {
        
        $resultadoBusca = $controller->buscar($q);

        $resultados = $resultadoBusca['resultados'];
        $sugestao = $resultadoBusca['sugestao'];
    }
}

require_once __DIR__ . "/views/header.php";
require_once __DIR__ . "/views/footer.php";

if ($page === 'pesquisa') {
    require_once __DIR__ . "/pesquisa/pagina-pesquisada.php";
} else {
    require_once __DIR__ . "/$page.php";
}