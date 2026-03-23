<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Arquip</title>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/main-pc.css">

    <!-- CSS ESPECÍFICO DE PÁGINA -->
    <?php if ($page === 'pesquisa'): ?>
        <link rel="stylesheet" href="/css/pesquisa.css">
    <?php endif; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

<?php require_once __DIR__ . "/header.php"; ?>

<?php
if ($page === 'pesquisa') {
    $arquivo = __DIR__ . "/../pesquisa/pagina-pesquisada.php";
} else {
    $arquivo = __DIR__ . "/../$page.php";
}

if (!file_exists($arquivo)) {
    $arquivo = __DIR__ . "/../home.php";
}

require_once $arquivo;
?>

<?php require_once __DIR__ . "/footer.php"; ?>

<script src="/js/script.js"></script>

</body>
</html>