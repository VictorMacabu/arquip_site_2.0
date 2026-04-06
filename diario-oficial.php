<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/CSS/footer.css">
    <link rel="stylesheet" href="/css/new-diario.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Diário Oficial Para O Cidadão</title>
</head>

<body>

    <?php require_once __DIR__ . "/views/header.php"
    ?>

    <!--- BANNER --->
    <div class="banner-estrutura">
        <div class="icone-esquerda">
            <img src="/assets/diario-oficial/img-esquerda.png" alt="Imagem do Pessoal conversando no banner do site" class="img-esquerda">
        </div>

        <div class="texto-banner">
            <h1>DIÁRIO OFICIAL PARA O CIDADÃO</h1>
            <p>
                O ARQUIP oferece o serviço de pesquisa de existência e planta para cidadãos e empresas que necessitam verificar a presença de documentos, como projetos arquitetônicos ou plantas de imóveis, no acervo municipal.

            </p>
        </div>

        <div>
            <img src="/assets/diario-oficial/img-direita.png" alt="Icone de uma Computador no banner do site " class="img-direita">
        </div>
    </div>



    <main>
        <section class="diario-oficial">
            <div class="diario_oficial_container">

                <!--- DIARIO-OFICIAL-INICIO--->

                <section class="diario-oficial_inicio">
                    <div class="diario-oficial_img">
                        <img src="/assets/diario-oficial/img-diario.png" alt="Imagem representando as Legislações, Tutoriais, Acesse o Diário Oficial">
                    </div>

                    <div class="sobre-diario">
                        <div class="sobre-diario_conteudo">
                            <h2> SOBRE O DIÁRIO OFICIAL </h2>
                            <p>
                                Com mais de um século de história, o Diário Oficial da Cidade de São Paulo é uma referência em transparência administrativa. Desde sua transformação digital em 1999, segue modernizando seus formatos e funcionalidades, culminando na criação de uma plataforma própria integrada ao Sistema Eletrônico de Informações (SEI).
                            </p>
                        </div>

                        <div class="sobre-diario_documento">
                            <img src="/assets/diario-oficial/img-documentos.png" alt="Imagem de 3 documentos">
                        </div>
                    </div>

                    <div class="sobre-diario_video">
                        <video controls preload="auto">
                            <source src="/assets/diario-oficial/novidades-diario-oficial.mp4" type="video/mp4">
                            <p>Seu navegador não aguenta este tipo de vídeos</p>
                        </video>
                    </div>
                </section>


                <!--- DETALHE-AZUL --->

                <div class="sobre-diario_detalhe_azul">
                    <div class="conteudo-detalhe_azul">
                        <h2>O Diário Oficial Cidade de São Paulo em números </h2>
                    </div>
                    <div class="acesso-detalhe_azul">
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


                <!--- DENTRO-DO-DIARIO-OFICIAL --->

                <section class="dentro-do-diario_oficial">
                    <div class="dentro-do-diario_titulo">
                        <h2>POR DENTRO DO DIÁRIO OFICIAL DE SÃO PAULO</h2>
                    </div>

                    <div class="cards-container">
                        <div class="card">
                            <img src="/assets/diario-oficial/icone-pessoa-pensando.png" alt="Card de Memória">
                            <h3>MEMÓRIA</h3>
                            <p>Tenha acesso a todas as edições do DOSP</p>
                        </div>

                        <div class="card">
                            <img src="/assets/diario-oficial/icone-carta.png" alt="Card de Clipping">
                            <h3>CLIPPING</h3>
                            <p>Cadastre-se para receber as publicações do seu interesse</p>
                        </div>

                        <div class="card">
                            <img src="/assets/diario-oficial/icone-livro.png" alt="Card do Diário Aberto">
                            <h3>DIÁRIO ABERTO</h3>
                            <p>Faça download de formatos abertos do DOSP para consulta e manuseio dos dados</p>
                        </div>

                        <div class="card">
                            <img src="/assets/diario-oficial/icone-rede.png" alt="Card da Edição Online">
                            <h3>EDIÇÃO ONLINE</h3>
                            <p>Leia o DOSP onde você estiver</p>
                        </div>

                        <div class="card">
                            <img src="/assets/diario-oficial/icone-lupa.png" alt="Card sobre as Matérias">
                            <h3>MATÉRIAS</h3>
                            <p>Consulte, pesquise, encontre sua publicação</p>
                        </div>

                        <div class="card">
                            <img src="/assets/diario-oficial/icone-livros.png" alt="Card Glossário">
                            <h3>GLOSSÁRIO</h3>
                            <p>Termos e siglas para descomplicar o DOSP</p>
                        </div>
                    </div>
                </section>


                <!--- PUBLICAÇÃO-OFICIAL --->

                <section class="publicacao-oficial">
                    <div class="publicacao-oficial_titulo">
                        <h2>PUBLICAÇÃO OFICIAL E COMUNICAÇÃO</h2>
                    </div>
                    <div class="container-cards_publicacao">
                        <div class="card-publicacao">
                            <img src="/assets/diario-oficial/manual-de-publicacao.png" alt="Icone de Manual de Publicação">
                            <h3>Manual de Publicação</h3>
                            <p>Saiba como publicar pelo SEI utilizando o botão P.</p>
                            <button>Baixar manual</button>
                        </div>

                        <div class="card-publicacao">
                            <img src="/assets/diario-oficial/documento-puplicaveis.png" alt="Icone de Documento publicáveis">
                            <div class="card-publicacao_ajuste">
                                <h3>Documentos publicáveis</h3>
                            </div>
                            <p>Consulte quais documentos do SEI podem ser enviados ao Diário Oficial.</p>
                            <button>Baixar documentos</button>
                        </div>
                    </div>
                </section>


                <!--- DESTAQUES-INOVAÇÕES --->

                <section class="destaques-inovacoes">
                    <div class="destaques-inovacoes_titulo">
                        <h2>DESTAQUES E INOVAÇÕES</h2>
                    </div>
                    <div class="container-cards_destaques">

                        <div class="card-destaques">
                            <img src="/assets/diario-oficial/economia.png" alt="Imagem relacionada a Economia">
                            <div class="card-destaques_conteudo">
                                <h3>Economia Significativa</h3>
                                <p>Redução de custos de publicação com o desenvolvimento de uma plataforma própria.</p>
                                <div class="moeda">
                                    <img src="/assets/diario-oficial/moeda.png" alt="Icone de uma Moeda">
                                </div>
                            </div>
                        </div>

                        <div class="card-destaques">
                            <img src="/assets/diario-oficial/acessibilidade.png" alt="Imagem sobre Acessibilidade">
                            <div class="card-destaques_conteudo">
                                <h3>Acessibilidade</h3>
                                <p>Interface intuitiva e inclusiva, com recursos para pessoas com deficiências visuais e auditivas.</p>
                            </div>
                        </div>

                        <div class="card-destaques">
                            <img src="/assets/diario-oficial/modernidade.png" alt="Imagem sobre a Modernidade">
                            <div class="card-destaques_conteudo">
                                <h3>Modernidade</h3>
                                <p>Publicações disponíveis em vários formatos (HTML, PDF, XML, JSON, CSV)</p>
                            </div>
                        </div>

                        <div class="card-destaques">
                            <img src="/assets/diario-oficial/memoria.png" alt="Imagem sobre a memória">
                            <div class="card-destaques_conteudo">
                                <h3>Memória Digital</h3>
                                <p>Todas as edições desde 1892 estão digitalizadas e acessíveis.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!--- CONSULTA-OFICIAL --->

                <section class="consulta-oficial">
                    <div class="consulta-oficial_titulo">
                        <h2>CONSULTE AS PUBLICAÇÕES DO SEU INTERESSE NO PORTAL DO DIÁRIO OFICIAL DE SÃO PAULO</h2>
                    </div>
                    <div class="consulta-oficial_img">
                        <a href="https://diariooficial.prefeitura.sp.gov.br/md_epubli_controlador.php?acao=inicio" target="_blank">
                            <img src="/assets/diario-oficial/img_notebook.png" alt="Imagem de um notebook contendo um link">
                        </a>
                    </div>
                </section>

                <!--- CENTRAL-AJUDA --->

                <section class="centro-ajuda">
                    <div class="centro-ajuda_titulo">
                        <h2>CENTRAL DE AJUDA</h2>
                    </div>

                    <div class="centro-ajuda_container_cards">
                        <div class="centro-ajuda_card">
                            <img src="/assets/diario-oficial/dicas.png" alt="Icone de dica">
                            <h3>Dicas</h3>
                            <p>Aprenda rapidamente com sugestões úteis</p>
                            <button>Ver Dicas</button>
                        </div>
                        
                        <div class="centro-ajuda_card">
                            <img src="/assets/diario-oficial/tutoriais.png" alt="Icone de Tutorial">
                            <h3>Tutoriais</h3>
                            <p>Veja o passo a passo dentro da plataforma</p>
                            <button>Ver Tutoriais</button>
                        </div>
                    </div>
                </section>

                <!--- VANTAGENS --->

                <section class="vantagens">
                    <div class="vantagens-publicador_cidadao">
                        <button class="ativo" data-img="/assets/diario-oficial/vantagens_img.png">VANTAGENS PARA O PUBLICADOR</button>
                        <button data-img="/assets/diario-oficial/vantagens_2.png">VANTAGENS PARA O CIDADÃO</button>
                    </div>

                    <div class="vantagens-imagens">
                        <img id="imagem-vantagens" src="/assets/diario-oficial/vantagens_img.png" alt="Imagem mostrando as vantagens para o publicador e para o cidadão">
                    </div>
                </section>





                <!--- PERGUNTAS-FREQUENTES --->

                <section class="perguntas-frequentes">
                    <div class="perguntas-frequentes_container">
                        <div class="perguntas-frequentes_titulo">
                            <h2>PERGUNTAS FREQUENTES</h2>
                        </div>

                        <div class="duvidas">

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>O que é o novo diário oficial ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>O que deve ser publicado no novo diário oficial ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Ainda é necessária a utilização do certificado digital ?</span>
                                        </div>
                                    </summary>
                                    <p>Não. As publicações pelo SEI serão realizadas apenas com o acesso do usuário ao sistema.</p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Qual a diferença do botão P e do botão N ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Todos os documentos do sei estão disponíveis para publicação ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Como filtrar publicação ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Onde encontrar todas as edições da versão certficada ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Qualquer pessoa consegue publicar um documento ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Haverá um horário limite para envio de publicação ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Como formatar o texto para publicar no SEI ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Como escolher o caderno onde as publicações serão feitas ? <br> (Despachos, concursos, editais, etc)</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                            <div class="perguntas-frequentes_conteudo">
                                <details>
                                    <summary>
                                        <div class="duvidas-pergunta">
                                            <span>Documentos externo “restrito” pode ser usado como link na publicação do diário oficial ?</span>
                                        </div>
                                    </summary>
                                    <p></p>
                                </details>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>


    <script src="/js/botao.js"></script>
</body>

</html>