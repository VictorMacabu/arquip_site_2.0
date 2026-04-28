<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial do Arquip">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>ARQUIP</title>
</head>

<body>

    <section class="container_banner">
        <header>
            <div class="banner-estrutura">
                <div class="banner-estrutura_conteudo">
                    <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
                    <p>Jornalista Paulo Roberto Dutra</p>
                </div>

                <form action="/index.php" method="GET" autocomplete="off" class="banner-busca">
                    <input type="hidden" name="page" value="pesquisa">

                    <div class="container-wrapper">
                        <div class="container">
                            <div class="input-wrapper">
                                <input
                                    type="text"
                                    name="q"
                                    id="input-busca"
                                    placeholder="Pesquisar no portal..."
                                    required>

                                <button type="submit" class="btn-buscar">Buscar</button>

                                <div id="sugestoes" class="sugestoes-box"></div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </header>
    </section>

    <main>
        <section class="quem-somos">
            <div class="quem-somos_conteudo">
                <h2>Conheça o <strong>ARQUIP</strong></h2>
                <p class="quem-somos_texto_pc">
                    O Arquivo Público do Município de São Paulo (ARQUIP)
                    tem como missão fundamental garantir o pleno
                    funcionamento de sua estrutura arquivística, assegurando
                    a organização, a preservação e o acesso à informação
                    pública.
                </p>
                <p class="quem-somos_texto_pc">
                    Para isso, o ARQUIP define e implementa procedimentos
                    operacionais padronizados, que visam garantir a
                    eficiência no tratamento e na gestão dos documentos.
                    Além disso, propõe políticas públicas externas para a
                    gestão documental e a preservação da memória
                    institucional, promovendo boas práticas que asseguram o
                    controle rigoroso dos acervos documentais.
                </p>
                <p class="quem-somos_texto_mobile">
                    O ARQUIP têm como missão garantir o funcionamento da estrutura arquivística, definindo procedimentos operacionais, propondo políticas públicas de gestão documental, assegurando o controle, a preservação e o acesso aos documentos.
                </p>
            </div>

            <div class="quem-somos-img">
                <img src="/assets/home/quem-somos.png" alt="Mulher explicando em quadro">

            </div>
        </section>

        <section class="portal-cards">

            <div class="portal-card">
                <div class="card-header">
                    <div class="icon-box">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span class="card-label">PORTAL PÚBLICO</span>
                </div>

                <h2>Atendimento ao Cidadão</h2>

                <p class="card-desc">
                    Serviços para a população, consulta de processos físicos e digitais e acesso a acervos históricos.
                </p>

                <div class="grid-servicos">

                    <a href="<?= url('consulta-processo') ?>" class="servico-item">
                        <i class="fa-regular fa-file-lines"></i>
                        <span>Consulta de processos administrativos</span>
                    </a>

                    <a href="<?= url('acesso-acervo') ?>" class="servico-item">
                        <i class="fa-regular fa-folder-open"></i>
                        <span>Acesso ao acervo / requerimento eletrônico</span>
                    </a>

                    <a href="<?= url('pesquisa-processo') ?>" class="servico-item">
                        <i class="fa-solid fa-map"></i>
                        <span>Pesquisa de processos/plantas</span>
                    </a>

                    <a href="<?= url('pesquisador-academico') ?>" class="servico-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Pesquisador Acadêmico</span>
                    </a>

                </div>
            </div>

            <div class="portal-card">

                <div class="card-header">
                    <div class="icon-box">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <span class="card-label">PORTAL INTERNO</span>
                </div>

                <h2>Atendimento ao Servidor</h2>

                <p class="card-desc">
                    Plataformas integradas para gestão de documentos, Diário Oficial e suporte técnico institucional.
                </p>

                <div class="lista-servicos">

                    <a href="<?= url('gestao-documental') ?>" class="linha-servico">
                        <i class="fa-regular fa-folder"></i>
                        <span>Gestão documental</span>
                        <i class="fa-solid fa-arrow-right seta"></i>
                    </a>

                    <a href="<?= url('orientacao') ?>" class="linha-servico">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Orientações aos EDOCS</span>
                        <i class="fa-solid fa-arrow-right seta"></i>
                    </a>

                    <div class="botoes-servicos">
                        <a href="<?= url('agorasei') ?>">AgoraSEI</a>
                        <a href="<?= url('digitasampa') ?>">Digital Sampa</a>
                        <a href="<?= url('diario-oficial') ?>">Diário Oficial</a>
                    </div>

                </div>

            </div>

        </section>

        <section class="servicos">
            <div class="servico-container">

                <div class="servico-card">
                    <div class="servico-topo">
                        <div class="servico-card_img">
                            <img src="/assets/home/gestao-documental.png">
                        </div>
                    </div>

                    <h2>GESTÃO DOCUMENTAL</h2>

                    <p>
                        A PGDOC é um conjunto de diretrizes que tem por
                        objetivo organizar a produção, uso e destinação dos
                        documentos da Administração de São Paulo, de forma a
                        tornar a informação acessível a sua guarda sustentável.
                    </p>

                    <a href="<?= url('gestao-documental') ?>" class="servico-btn">
                        →
                    </a>
                </div>

                <div class="servico-card">
                    <div class="servico-topo">
                        <div class="servico-card_img">
                            <img src="/assets/home/edocs.png">
                        </div>
                    </div>

                    <h2>E-DOCS</h2>

                    <p>
                        A Equipe de Gestão Documental (EDOC), criada pela
                        portaria 01/CGDOC/2021, reúne parceiros e
                        colaboradores que antes atuavam isoladamente em áreas
                        como administração local do SEI e gestão da Tabela de
                        Temporalidade.
                    </p>

                    <a href="<?= url('orientacao') ?>" class="servico-btn">
                        →
                    </a>
                </div>

                <div class="servico-card">
                    <div class="servico-topo">
                        <div class="servico-card_img">
                            <img src="/assets/home/difusao.png">
                        </div>
                    </div>

                    <h2>DIFUSÃO</h2>

                    <p>
                        A Equipe de Gestão Documental (EDOC), criada pela
                        portaria 01/CGDOC/2021, reúne gestores de diferentes
                        aspectos da gestão documental, como administradores do
                        SEI e pontos focais da Tabela de Temporalidade.
                    </p>

                    <a href="<?= url('home') ?>" class="servico-btn">
                        →
                    </a>
                </div>

            </div>
        </section>

        <div class="faixa-azul">
            <div class="conteudo-faixa-azul">
                <h2>O Diário Oficial Cidade de São Paulo em números </h2>
            </div>
            <div class="acesso-detalhe-azul">
                <div class="acesso-ajuste">
                    <span>200 +</span>
                    <p>ACESSOS</p>
                </div>
                <div class="acesso-ajuste">
                    <span>200 +</span>
                    <p>ECONOMIA GERADA</p>
                </div>
            </div>
        </div>


        <section class="sistemas sistemas_pc">
            <div class="sistemas-container">
                <div class="sistemas-conteudo">
                    <div class="titulo-sistemas">
                        <span class="sistemas-titulo">
                            ACESSE NOSSOS <br>
                        </span>
                        <h2 class="sistemas-titulo_destaque">
                            SISTEMAS GERENCIADOS
                        </h2>
                    </div>

                    <div class="carrossel-container">
                        <button class="seta esquerda"><img src="/assets/home/icone-sete_esquerda.png"
                                alt="Seta para ativar o carrossel"></button>

                        <div class="carrossel">
                            <div class="track">
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                                <div class="card">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>

                        <button class="seta direita"><img src="/assets/home/icone-seta.png"
                                alt="Seta para ativar o carrossel"></button>
                    </div>
                </div>
                <div class="sistemas-imagem">
                    <img src="/assets/home/power.bi.png" alt="Imagem de uma planilha em Power BI">
                </div>
            </div>
        </section>

        <section class="noticias">
            <div class="noticias-titulo">
                <h4>ÚLTIMAS NOTÍCIAS</h4>
            </div>
            <div class="noticia-container">
                <div class="noticia-card">
                    <img src="/assets/home/curiosidade.png" alt="Imagem das Curiosidades">
                    <div class="noticia-meta">
                        <span class="noticia-categoria categoria-cidadao">Cidadão</span>
                        <span class="noticia-data"><?= date('d/m/Y') ?></span>
                    </div>
                    <h3>Capacitação AGORASEI</h3>
                    <p>
                        Para aprimorar publicações do Diário Oficial, visando eficiência e qualidade.
                        Profissionais serão treinados nas melhores práticas e ferramentas.
                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>"><strong>CONTINUAR LENDO ></strong></a>
                </div>

                <div class="noticia-card">
                    <img src="/assets/home/curiosidade.png" alt="Imagem das Curiosidades">
                    <div class="noticia-meta">
                        <span class="noticia-categoria categoria-avisos">Avisos</span>
                        <span class="noticia-data"><?= date('d/m/Y') ?></span>
                    </div>
                    <h3>Curiosidades Históricas</h3>
                    <p>
                        Descubra as principais curiosidades deste mês: de eventos inusitados a fatos surpreendentes
                        que marcaram as últimas semanas.

                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>"><strong>CONTINUAR LENDO ></strong></a>
                </div>

                <div class="noticia-card">
                    <img src="/assets/home/indicadores.png" alt="Imagem dos indicadores 2023">
                    <div class="noticia-meta">
                        <span class="noticia-categoria categoria-servidor">Servidor</span>
                        <span class="noticia-data"><?= date('d/m/Y') ?></span>
                    </div>
                    <h3>Indicadores 2023</h3>
                    <p>
                        Servidor, confira os principais dados dos núcleos do ARQUIP em 2023.
                        A sua visualização é importante para atingir as metas desse ano.
                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>"><strong>CONTINUAR LENDO ></strong></a>
                </div>
            </div>
        </section>
    </main>

    <script src="/js/cards.js"></script>

</body>

</html>