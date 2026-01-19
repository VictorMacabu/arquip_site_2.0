<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial do Arquip">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <title>ARQUIP</title>
</head>

<body>

    <!--- CABEÇALHO --->
    <?php
    require_once __DIR__ . '/views/header-pc.php';
    ?>


    <!---  BANNER  --->
    <section class="banner">
        <div class="banner-texto">
            <h1>ARQUIVO PÚBLICO MUNICIPAL</h1>
            <h2>Jornalista Paulo Roberto Dutra</h2>
        </div>
    </section>


    <!--- PRIMEIRA SEÇÃO --->
    <main>
        <section class="primeira-secao">
            <div class="text-center">
                <h1>Conheça O ARQUIP</h1>
                <p>O ARQUIP têm como missão garantir o funcionamento da estrutura arquivística, definindo procedimentos
                    operacionais, propondo políticas públicas de gestão documental, assegurando o controle, a
                    preservação e o acesso aos documentos. </p>
                <p class="texto-mobile">Para isso, a ARQUIP define e implementa procedimentos operacionais padronizados, que visam garantir a eficiência no tratamento e na gestão dos documentos. Além disso, propõe políticas públicas externas para a gestão documental e a preservação da memória institucional, promovendo boas práticas que asseguram o controle rigoroso dos acervos documentais. </p>
            </div>

            <!--- CARDS --->
            <div class="card text-center"><img src="/assets/banner/card-trabalho.png" alt="banner de Atendimento ao cidadão">
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

            <div class="card text-center"><img src="/assets/banner/planilha.png"
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

        <!--- SEGUNDA SEÇÃO --->
        <section class="segunda-secao">
            <div class="icone text-center card-icone">
                <div class="titulo-card-icone">
                    <div class="img-card">
                        <img src="/assets/icones/gestao-documental.png"
                            alt="icone da gestão Documental">
                    </div>
                </div>

                <!--- CARDS --->
                <div class="titulo-card">
                    <h2>GESTÃO DOCUMENTAL</h2>
                    <hr>
                </div>
                <div class="text-card">
                    <p>A PGDOC é um conjunto de diretrizes que tem por objetivo organizar a produção, uso e destinação
                        dos documentos da Administração de São Paulo, de forma a tornar a informação acessível a sua
                        guarda sustentável.</p>
                </div>
                <button> SAIBA MAIS</button>

            </div>
            </div>

            <div class="icone text-center card-icone">
                <div class="titulo-card-icone">
                    <div class="img-card">
                        <img src="/assets/icones/e-docs.png" alt="icone da e-docs">
                    </div>
                    <h2>E-DOCS</h2>
                    <hr>
                </div>

                <div class="text-card">
                    <p>A Equipe de Gestão Documental – EDOC, reunida pela portaria 01/CGDOC/2021, é uma rede de
                        parceiros e colaboradores que já atuavam de forma isolada como gestores de aspectos específicos
                        da gestão documental, bem como administradores locais do SEI, pontos focais da Tabela de
                        Temporalidade entre outros.</p>
                </div>
                <button>SAIBA MAIS</button>
            </div>

            <div class="icone text-center  card-icone">
                <div class="titulo-card-icone">
                    <div class="img-card">
                        <img src="/assets/icones/difusao.png" alt="icone da difusão">
                    </div>
                    <h2>DIFUSÃO</h2>
                    <hr>
                </div>
                <div class="text-card">
                    <p>A Equipe de Gestão Documental (EDOC), criada pela portaria 01/CGDOC/2021, reúne gestores de
                        diferentes aspectos da gestão documental, como administradores do SEI e pontos focais da Tabela
                        de Temporalidade.</p>
                </div>
                <button>SAIBA MAIS</button>
            </div>
        </section>

        <!--- SISTEMAS --->
        <section class="sistemas">

            <div class="carrossel-card">
                <div class="carrossel-sistema ">
                    <h2>ACESSE NOSSOS <br>SISTEMAS GERENCIADOS</h2>
                    <div class="carrossel card">
                        <div id="um"></div>
                        <div id="2"></div>
                        <div id="3"></div>
                    </div>
                </div>
                <img src="./assets/sistema-geren/Group 1844.png" alt="">
            </div>


            <div class="sistema-mobile">
                <h2>ACESSE NOSSOS SISTEMAS GERENCIADOS</h2>
                <div class="sei">
                    <div>
                        SETA
                        <img src="/assets/sistema-geren/icone-sei.png" alt="">SETA
                    </div>
                </div>
            </div>
    </main>

</body>

</html>