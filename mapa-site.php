<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/main-pc.css">
    <link rel="stylesheet" href="/css/mapa-site.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <title>Mapa do Site</title>
</head>
<body>

    <!-- CABEÇALHO -->
    <?php require_once __DIR__ . "/views/header.php"
    ?>

    <!-- INICIO PÁGINA -->
    <div class="sitemap">

        <h1>Mapa do Site</h1>
        <ul>
            <li><a href="index.php">Página Inicial</a></li>
        </ul>

        <h3>O Arquivo</h3>
        <ul>
            <li><a href="quem-somos.php">Quem Somos?</a></li>
            <li><a href="estrutura-organizacional.php">Estrutura Organizacional</a></li>
            <li><a href="historico.php">Histórico</a></li>
            <li><a href="portal-processos.php">Portal de Processos</a></li>
            <li><a href="acesso-acervo.php">Acesso ao Acervo</a></li>
        </ul>

        <h3>Sistemas</h3>
        <ul>
            <li><a href="digitasampa.php">Digitasampa</a></li>
            <li><a href="orientacao.php">Orientação às Edocs</a></li>
            <li><a href="agorasei.php">AgoraSEI!</a></li>
        </ul>

    </div>
    
    <?php
    require_once __DIR__ . '/views/footer.php';
    ?>



</body>
</html>
