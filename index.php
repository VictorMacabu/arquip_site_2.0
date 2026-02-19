<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial do Arquip">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer-index.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Arquip</title>

</head>
<body>


    <!--- CABEÇALHO --->
    <?php
    require_once __DIR__ . '/views/header.php';
    ?>

    <!---  BANNER/PC --->
    <section class="banner">
        <div class="banner-texto">
            <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
            <h2>Jornalista Paulo Roberto Dutra</h2>
        </div>
    </section>


    <!--- QUEM SOMOS --->
    <main>
        <section class="quem-somos">
            <div class="quem-somos_conteudo">
                <div class="quem-somos_titulo">
                    <h2>Conheça O ARQUIP</h2>
                </div>
                <p class="quem-somos_texto_pc">
                    O Arquivo Público do Município de São Paulo (ARQUIP) tem como missão fundamental garantir o pleno funcionamento de sua estrutura arquivística, assegurando a organização, a preservação e o acesso à informação pública.
                </p>
                <p class="quem-somos_texto_pc">
                    Para isso, a ARQUIP define e implementa procedimentos operacionais padronizados, que visam garantir a eficiência no tratamento e na gestão dos documentos. Além disso, propõe políticas públicas externas para a gestão documental e a preservação da memória institucional, promovendo boas práticas que asseguram o controle rigoroso dos acervos documentais.
                </p>
                <p class="quem-somos_texto_mobile">
                    O ARQUIP têm como missão garantir o funcionamento da estrutura arquivística, definindo procedimentos operacionais, propondo políticas públicas de gestão documental, assegurando o controle, a preservação e o acesso aos documentos.
                </p>
            </div>

            <!--- CARDS --->
            <div class="atendimento-card">
                <img src="/assets/banner/index/card-trabalho.png" alt="banner de Atendimento ao cidadão">
                <div class="atendimento-card_conteudo">

                    <h2 class="atendimento-card_titulo">
                        Atendimento ao Cidadão
                    </h2>

                    <ul class="atendimento-card_lista">
                        <li>
                            <a href="#">Consulta de processos administrativos</a>
                        </li>
                        <li>
                            <a href="#">Acesso ao acervo - Requerimento eletrônico</a>
                        </li>
                        <li>
                            <a href="#">Pesquisa de existência de processos/plantas</a>
                        </li>
                        <li>
                            <a href="#">Pesquisador Acadêmico</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="atendimento-card"><img src="/assets/banner/index/planilha.png" alt="banner de Atendimento ao servidor">
                <div class="atendimento-card_conteudo">


                    <h2 class="atendimento-card_titulo">
                        Atendimento ao Servidor
                    </h2>

                    <ul class="atendimento-card_lista">
                        <li>
                            <a href="#">Gestão Documental</a>
                        </li>
                        <li>
                            <a href="#">Orientação às EDOCS</a>
                        </li>
                        <li>
                            <a href="#">AgoraSEI!</a>
                        </li>
                        <li>
                            <a href="#">DigitaSampa</a>
                        </li>
                        <li>
                            <a href="#">Diário Oficial Cidade de São Paulo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!--- SERVIÇOS --->
        <section class="servicos">

            <!--- CARD GESTÃO DOCUMENTAL --->
            <div class="servico-card">

                <div class="servico-card_icone">
                    <img src="/assets/icones/gestao-documental.png" alt="icone da gestão Documental">
                </div>
                <h2 class="servico-card_titulo">
                    GESTÃO DOCUMENTAL
                </h2>
                <hr class="servico-card_linha">
                <p class="servico-texto">
                    A PGDOC é um conjunto de diretrizes que tem por objetivo organizar a produção, uso e destinação
                    dos documentos da Administração de São Paulo, de forma a tornar a informação acessível a sua
                    guarda sustentável.
                </p>
                <button class="servico-card_botao">SAIBA MAIS</button>
            </div>

            <!--- CARD E-DOCS --->
            <div class="servico-card">
                <div class="servico-card_icone">
                    <img src="/assets/icones/e-docs.png" alt="icone da e-docs">
                </div>
                <h2 class="servico-card_titulo">
                    E-DOCS
                </h2>
                <hr class="servico-card_linha">
                <p class="servico-texto">
                    A Equipe de Gestão Documental – EDOC, reunida pela portaria 01/CGDOC/2021, é uma
                    rede de
                    parceiros e colaboradores que já atuavam de forma isolada como gestores de aspectos específicos
                    da gestão documental, bem como administradores locais do SEI, pontos focais da Tabela de
                    Temporalidade entre outros.</p>
                <button class="servico-card_botao"> SAIBA MAIS</button>
            </div>

            <!--- CARD DIFUSÃO --->
            <div class="servico-card">
                <div class="servico-card_icone">
                    <img src="/assets/icones/difusao.png" alt="icone da difusão">
                </div>
                <h2 class="servico-card_titulo">
                    DIFUSÃO
                </h2>
                <hr class="servico-card_linha">
                <p class="servico-texto">
                    A Equipe de Gestão Documental (EDOC), criada pela portaria 01/CGDOC/2021, reúne gestores de
                    diferentes aspectos da gestão documental, como administradores do SEI e pontos focais da Tabela
                    de Temporalidade.
                </p>
                <button class="servico-card_botao"> SAIBA MAIS</button>
            </div>
        </section>

        <!--- SISTEMAS PC--->
        <section class="sistemas sistemas_pc">
            <div class="sistemas-container">
                <div class="sistemas-conteudo">
                    <h2 class="sistemas-titulo">
                        ACESSE NOSSOS <br>
                        <span class="sistemas-titulo_destaque">
                            SISTEMAS GERENCIADOS
                        </span>
                    </h2>
                    <div class="sistemas-carrossel">
                        <div class="sistemas-item"></div>
                        <div class="sistemas-item"></div>
                        <div class="sistemas-item"></div>
                    </div>

                </div>
                <div class="sistemas-imagem">
                    <img src="./assets/sistema-geren/Group 1844.png" alt="Imagem de uma planilha em Power BI">
                </div>
            </div>
        </section>

        <!--- SISTEMAS MOBILE --->
        <div class="sistema-mobile">
            <h4 class="sistema-mobile_titulo">
                ACESSE NOSSOS <br>
                <b>SISTEMAS GERENCIADOS</b>
            </h4>
            <div class="power-bi">
                <div class="bloco-em_branco">
                </div>
            </div>
        </div>


        <!--- ÚLTIMAS NOTÍCIAS --->
        <section class="noticias">
            <h4 class="noticia-titulo">
                ÚLTIMAS NOTÍCIAS
            </h4>
            <div class="noticias-cards">
                <div class="noticia-card">
                    <img src="/assets/ultimas-noticias/curiosidade.png" alt="Curiosidades Históricas">
                    <h3 class="noticia-card_titulo">
                        Curiosidades Históricas
                    </h3>
                    <p class="noticia-card_texto">
                        Descubra as principais curiosidades deste mês: de eventos inusitados a fatos surpreendentes que marcaram as últimas semanas.
                    </p>
                    <a class="noticia-card_link" href="/">Saiba mais →</a>
                </div>
                <div class="noticia-card">
                    <img src="/assets/ultimas-noticias/curiosidade.png" alt="Capacitação AGORASEI">
                    <h3 class="noticia-card_titulo">
                        Capacitação AGORASEI
                    </h3>
                    <p class="noticia-card_texto">
                        Para aprimorar publicações do Diário Oficial, visando eficiência e qualidade. Profissionais serão treinados nas melhores práticas e ferramentas.
                    </p>
                    <a class="noticia-card_link" href="/">Saiba mais →</a>
                </div>
                <div class="noticia-card">
                    <img src="/assets/ultimas-noticias/indicadores.png" alt="Indicadores 2023">
                    <h3 class="noticia-card_titulo">
                        Indicadores 2023
                    </h3>
                    <p class="noticia-card_texto">
                        Servidor, confira os principais dados dos núcleos do ARQUIP em 2023. A sua visualização é importante para atingir as metas desse ano.
                    </p>
                    <a class="noticia-card_link" href="/">Saiba mais →</a>
                </div>
            </div>
        </section>

        <section class="noticia-mobile">
            <h4 class="noticia-titulo">
                ÚLTIMAS NOTÍCIAS
            </h4>
            <div class="noticia-cards">
                <div class="noticia-card">
                    <img src="/assets/ultimas-noticias/curiosidade.png" alt="Curiosidades Históricas">
                    <h3 class="noticia-card_titulo">
                        Curiosidades Históricas
                    </h3>
                    <p class="noticia-card_texto">
                        Descubra as principais curiosidades deste mês: de eventos inusitados a fatos surpreendentes que marcaram as últimas semanas.
                    </p>
                    <div class="noticia-card_link">
                        <a href="/">Saiba mais →</a>
                    </div>
                </div>
        </section>
    </main>

    <?php
    require_once __DIR__ . '/views/footer-index.php';
    ?>
</body>

</html>