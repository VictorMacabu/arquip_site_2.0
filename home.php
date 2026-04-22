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

    <section class="container_banner">
        <header>
            <div class="banner-estrutura">
                    <form action="/index.php" method="GET" autocomplete="off">
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
                                    <button type="submit" class="btn-lupa">
                                        <img src="/assets/header/lupa.png" alt="Pesquisar">
                                    </button>
                                    <button type="submit" class="btn-buscar"></button>
                                    <div id="sugestoes" class="sugestoes-box"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    <div class="banner-estrutura_conteudo">
                        <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
                        <P>
                            Jornalista Paulo Roberto Dutra
                        </P>
                        </div>
                    </div>
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
                <p class="quem-somos_texto_mobile">...</p>
            </div>

            <!-- Atendimento ao cidadão -->
            <div class="cards-container">
                <div class="atendimento-card">
                    <img src="/assets/home/card-trabalho.png">
                    <div class="atendimento-card_titulo">
                        <h2><strong>Atendimento ao Cidadão</strong></h2>
                        <p>Serviços para a população, consulta de processos físicos e digitais e acesso a acervos históricos.</p>
                    </div>
                    <div class="atendimento-card_lista">
                        <ul>
                            <li><a href="<?= url('consulta-processo') ?>">Consulta de processos administrativos</a></li>
                            <li><a href="<?= url('acesso-acervo') ?>">Acesso ao acervo - Requerimento eletrônico</a>
                            </li>
                            <li><a href="<?= url('pesquisa-processo') ?>">Pesquisa de existência de
                                    processos/plantas</a></li>
                            <li><a href="<?= url('pesquisador-academico') ?>">Pesquisador Acadêmico</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Atendimento ao servidor -->
                <div class="atendimento-card">
                    <img src="/assets/home/planilha.png">
                    <div class="atendimento-card_conteudo">
                        <div class="atendimento-card_titulo">
                            <h2><strong>Atendimento ao Servidor</strong></h2>
                            <p>Plataformas integradas para gestão de documentos, Diário Oficial e suporte técnico institucional.</p>
                        </div>
                        <div class="atendimento-card_lista">
                            <ul>
                                <li><a href="<?= url('gestao-documental') ?>">Gestão Documental</a></li>
                                <li><a href="<?= url('orientacao') ?>">Orientação às EDOCS</a></li>
                                <li><a href="<?= url('agorasei') ?>">AgoraSEI!</a></li>
                                <li><a href="<?= url('digitasampa') ?>">DigitaSampa</a></li>
                                <li><a href="<?= url('diario-oficial') ?>">Diário Oficial Cidade de São Paulo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="servicos">
            <div class="servico-container">

                <div class="servico-card">
                    <div class="servico-card_img">
                        <img src="/assets/home/gestao-documental.png" alt="Icone da Gestão Documental">
                    </div>
                    <h2>GESTÃO DOCUMENTAL</h2>
                    <p>
                        A PGDOC é um conjunto de diretrizes que tem por
                        objetivo organizar a produção, uso e destinação dos
                        documentos da Administração de São Paulo, de forma a
                        tornar a informação acessível a sua guarda sustentável.
                    </p>
                    <a href="<?= url('gestao-documental') ?>">SAIBA MAIS</a>
                </div>

                <div class="servico-card">
                    <div class="servico-card_img">
                        <img src="/assets/home/edocs.png" alt="Icone da E-DOCS">
                    </div>
                    <h2>E-DOCS</h2>
                    <p>
                        A Equipe de Gestão Documental (EDOC), criada pela
                        portaria 01/CGDOC/2021, reúne parceiros e
                        colaboradores que antes atuavam isoladamente em áreas
                        como administração local do SEI e gestão da Tabela de
                        Temporalidade.
                    </p>
                    <a href="<?= url('orientacao') ?>">SAIBA MAIS</a>
                </div>

                <div class="servico-card">
                    <div class="servico-card_img">
                        <img src="/assets/home/difusao.png" alt="Icone da difusão">
                    </div>
                    <h2>DIFUSÃO</h2>
                    <p class="servico-card_ajuste">
                        A Equipe de Gestão Documental (EDOC), criada pela
                        portaria 01/CGDOC/2021, reúne gestores de diferentes
                        aspectos da gestão documental, como administradores do
                        SEI e pontos focais da Tabela de Temporalidade.
                    </p>
                    <a href="<?= url('home') ?>">SAIBA MAIS</a>
                </div>

            </div>
        </section>


        <!-- Sistemas -->
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


        <!-- Notícias -->
        <section class="noticias">
            <div class="noticias-titulo">
                <h4>ÚLTIMAS NOTÍCIAS</h4>
            </div>
            <div class="noticia-container">
                <div class="noticia-card">
                    <img src="/assets/home/curiosidade.png" alt="Imagem das Curiosidades">
                    <h3>Curiosidades Históricas</h3>
                    <p>
                        Para aprimorar publicações do Diário Oficial, visando eficiência e qualidade.
                        Profissionais serão treinados nas melhores práticas e ferramentas.
                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>">Saiba mais →</a>
                </div>

                <div class="noticia-card">
                    <img src="/assets/home/curiosidade.png" alt="Imagem das Curiosidades">
                    <h3>Capacitação AGORASEI</h3>
                    <p>
                        Descubra as principais curiosidades deste mês: de eventos inusitados a fatos surpreendentes
                        que marcaram as últimas semanas.

                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>">Saiba mais →</a>
                </div>

                <div class="noticia-card">
                    <img src="/assets/home/indicadores.png" alt="Imagem dos indicadores 2023">
                    <h3>Indicadores 2023</h3>
                    <p>
                        Servidor, confira os principais dados dos núcleos do ARQUIP em 2023.
                        A sua visualização é importante para atingir as metas desse ano.
                    </p>
                    <a class="noticia-card_link" href="<?= url('home') ?>">Saiba mais →</a>
                </div>
            </div>
        </section>
    </main>

    <script src="/js/cards.js"></script>

</body>

</html>