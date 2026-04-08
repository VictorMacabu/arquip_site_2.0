<?php

$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home',
    'gestao-documental',
    'quem-somos',
    'estrutura-organizacional',
    'legislacoes',
    'pesquisa-processo',
    'pesquisador-academico',
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
    'pesquisa',
    'autocomplete'
];

if ($page === 'autocomplete') {
    require_once __DIR__ . "/pesquisa/autocomplete.php";
    exit;
}

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

$q = $_GET['q'] ?? '';
$resultados = [];
$sugestao = null;


if ($page === 'pesquisa') {

    require_once __DIR__ . "/database/ConnectDB.php";
    require_once __DIR__ . "/controller/PesquisaController.php";

    $controller = new PesquisaController($pdo);

    if (!empty($q)) {

        $resultadoBusca = $controller->buscar($q);

        if (is_array($resultadoBusca)) {
            $resultados = $resultadoBusca['resultados'] ?? [];
            $sugestao = $resultadoBusca['sugestao'] ?? null;
        } else {
            $resultados = [];
            $sugestao = null;
        }
    }
}

require_once __DIR__ . "/views/layout.php";