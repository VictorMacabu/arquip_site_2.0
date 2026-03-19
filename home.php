<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial do Arquip">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>ARQUIP</title>
</head>

<body>

    <section class="banner">
        <div class="banner-texto">
            <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
            <h2>Jornalista Paulo Roberto Dutra</h2>
        </div>
    </section>

    <main>
        <section class="quem-somos">
            <div class="quem-somos_conteudo">
                <h2>Conheça O ARQUIP</h2>
                <p class="quem-somos_texto_pc">...</p>
                <p class="quem-somos_texto_pc">...</p>
                <p class="quem-somos_texto_mobile">...</p>
            </div>

            <!-- Atendimento ao cidadão -->
            <div class="atendimento-card">
                <img src="/assets/banner/index/card-trabalho.png">
                <div class="atendimento-card_conteudo">
                    <h2>Atendimento ao Cidadão</h2>
                    <ul>
                        <li><a href="<?= url('consulta-processo') ?>">Consulta de processos administrativos</a></li>
                        <li><a href="<?= url('acesso-acervo') ?>">Acesso ao acervo</a></li>
                        <li><a href="<?= url('pesquisa-processo') ?>">Pesquisa de processos</a></li>
                        <li><a href="<?= url('pesquisador-academico') ?>">Pesquisador Acadêmico</a></li>
                    </ul>
                </div>
            </div>

            <!-- Atendimento ao servidor -->
            <div class="atendimento-card">
                <img src="/assets/banner/index/planilha.png">
                <div>
                    <h2>Atendimento ao Servidor</h2>
                    <ul>
                        <li><a href="<?= url('gestao-documental') ?>">Gestão Documental</a></li>
                        <li><a href="<?= url('orientacao') ?>">Orientação às EDOCS</a></li>
                        <li><a href="<?= url('agorasei') ?>">AgoraSEI!</a></li>
                        <li><a href="<?= url('digitasampa') ?>">DigitaSampa</a></li>
                        <li><a href="<?= url('diario-oficial') ?>">Diário Oficial</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Serviços -->
        <section class="servicos">

            <div class="servico-card">
                <h2>GESTÃO DOCUMENTAL</h2>
                <p>...</p>
                <a href="<?= url('gestao-documental') ?>">SAIBA MAIS</a>
            </div>

            <div class="servico-card">
                <h2>E-DOCS</h2>
                <p>...</p>
                <a href="<?= url('orientacao') ?>">SAIBA MAIS</a>
            </div>

            <div class="servico-card">
                <h2>DIFUSÃO</h2>
                <p>...</p>
                <a href="<?= url('home') ?>">SAIBA MAIS</a>
            </div>

        </section>

        <!-- Notícias -->
        <section class="noticias">
            <h4>ÚLTIMAS NOTÍCIAS</h4>

            <div class="noticia-card">
                <h3>Curiosidades Históricas</h3>
                <a href="<?= url('home') ?>">Saiba mais →</a>
            </div>

            <div class="noticia-card">
                <h3>Capacitação AGORASEI</h3>
                <a href="<?= url('home') ?>">Saiba mais →</a>
            </div>

            <div class="noticia-card">
                <h3>Indicadores 2023</h3>
                <a href="<?= url('home') ?>">Saiba mais →</a>
            </div>

        </section>

    </main>

    <script src="/js/cards.js"></script>

</body>
</html>