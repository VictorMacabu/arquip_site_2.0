<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial do Arquip">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/banner.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <title>ARQUIP</title>

    <?php
    require_once __DIR__ . '/views/header.php';
    ?>

</head>

<body>

    <section class="banner">
        <div class="banner-texto">
            <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
            <h2>Jornalista Paulo Roberto Dutra</h2>
        </div>
    </section>

    <main>

        <section>
            <div class="text-center">
                <h1>Conheça O ARQUIP</h1>
                <p>O ARQUIP têm como missão garantir o funcionamento da estrutura arquivística, definindo procedimentos
                    operacionais, propondo políticas públicas de gestão documental, assegurando o controle, a
                    preservação e o acesso aos documentos. </p>
            </div>
        </section>

        <section>
            <div class="card text-center"><img src="/assets/banner/site 1 1.png" alt="banner de Atendimento ao cidadão">
                <div>
                    <h2>Atendimento ao Cidadão</h2>
                    <ul>
                        <li><a href="#">Consulta de processos administrativos</a></li>
                        <li><a href="#">Acesso ao Acervo</a></li>
                        <li><a href="#">Pesquisa de processos/plantas</a></li>
                        <li><a href="#">Pesquisador Acadêmico</a></li>
                        <li><a href="#">Central de Atendimento</a></li>
                    </ul>
                </div>
            </div>

            <div class="card text-center"><img src="/assets/banner/site 2 1.png"
                    alt="banner de Atendimento ao servidor">
                <div>
                    <h2>Atendimento ao Servidor</h2>
                    <ul>
                        <li><a href="#">Gestão Documental</a></li>
                        <li><a href="#">Orientação às EDOCS</a></li>
                        <li><a href="#">Central de Atendimento</a></li>
                        <li><a href="#">AgoraSEI!</a></li>
                        <li><a href="#">DigitaSampa</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="icone text-center"><img src="/assets/icones/gestao-documental.png"
                    alt="icone da gestão Documental">
                <div>
                    <h2>GESTÃO DOCUMENTAL</h2>
                    <hr>
                    <p>A PGDOC é um conjunto de diretrizes que tem por objetivo organizar a produção, uso e destinação
                        dos documentos da Administração de São Paulo, de forma a tornar a informação acessível a sua
                        guarda sustentável.</p>
                    <button> SAIBA MAIS</button>
                </div>
            </div>

            <div class="icone text-center"><img src="/assets/icones/e-docs.png" alt="icone da e-docs">
                <div>
                    <h2>E-DOCS</h2>
                    <hr>
                    <p>A Equipe de Gestão Documental – EDOC, reunida pela portaria 01/CGDOC/2021, é uma rede de
                        parceiros e colaboradores que já atuavam de forma isolada como gestores de aspectos específicos
                        da gestão documental, bem como administradores locais do SEI, pontos focais da Tabela de
                        Temporalidade entre outros.</p>
                    <button>SAIBA MAIS</button>
                </div>
            </div>

            <div class="icone text-center"><img src="/assets/icones/difusao.png" alt="icone da difusão">
                <div>
                    <h2>DIFUSÃO</h2>
                    <hr>
                    <p>A Equipe de Gestão Documental (EDOC), criada pela portaria 01/CGDOC/2021, reúne gestores de
                        diferentes aspectos da gestão documental, como administradores do SEI e pontos focais da Tabela
                        de Temporalidade.</p>
                    <button>SAIBA MAIS</button>
                </div>
            </div>
        </section>

        <section>
            <div class="sistema">
                <h2>ACESSE NOSSOS SISTEMAS GERENCIADOS</h2>
                <div class="sei">
                    <div>
                        SETA
                        <img src="/assets/sistema-geren/icone-sei.png" alt="">SETA
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="noticias">
                <h2>ÚLTIMAS NOTÍCIAS </h2>
                <div>
                    <img src="/assets/ultimas-noticias/curiosidade 3.png" alt="ultimas noticias">
                    <h3>Curiosidades Históricas</h3>
                    <p>Descubra as principais curiosidades deste mês: de eventos inusitados a fatos surpreendentes que
                        marcaram as últimas semanas.</p>
                    <a href="#" class="btn-saiba-mais">
                        Saiba mais <span class="seta">→</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="conteiner">
            <div class="footer-texto">
                <p class="p-10">Secretaria Municipal de Gestão</p>
                <p class="p-10"><strong>ARQUIVO PÚBLICO MUNICIPAL</strong><br>Jornalista Paulo Roberto Dutra</p>
                <img class="p-10" src="/assets/footer/icone-arquip.png" alt="Arquip" />
            </div>
            <div class="footer-logo">
                <img src="/assets/footer/icone-gestao.png" alt="Cidade de São Paulo" />
            </div>
        </div>
        <p class="p-10">R. Léo Ribeiro de Morães, 66 – Freguesia do Ó<br>São Paulo/SP – Brasil</p>
    </footer>

</body>
</html>