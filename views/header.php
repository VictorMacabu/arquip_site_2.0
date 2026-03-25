<?php
if (!function_exists('url')) {
    function url($page)
    {
        return "/index.php?page=" . $page;
    }
}
?>

<header class="cabecalho">
    <div class="cabecalho-logos">
        <a href="/">
            <img class="cabecalho-logo_arquip" src="/assets/header/logo-arquip-branco.png" alt="Arquip">
        </a>

        <a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/gestao/" target="_blank">
            <img class="cabecalho-logo_gestao" src="/assets/header/logo-gestao.png" alt="Gestão">
        </a>
    </div>

    <nav class="navegacao">

        <ul class="navegacao-lista">

            <li class="navegacao-item">
                <button class="navegacao-botao">
                    Institucional
                    <div class="seta-menu">
                        <img src="/assets/header/seta-para-baixo.png">
                    </div>
                </button>

                <div class="navegacao-mega_menu">
                    <div class="navegacao-mega_container">
                        <div class="navegacao-coluna">
                            <a href="<?= url('quem-somos') ?>">Quem somos?</a>
                            <a href="<?= url('estrutura-organizacional') ?>">Estrutura Organizacional</a>
                            <a href="<?= url('sistemas-arquivos') ?>">Sistema de Arquivos</a>
                            <a href="<?= url('gestao-documental') ?>">Política de Gestão</a>
                            <a href="<?= url('legislacoes') ?>">Legislações</a>
                            <a href="<?= url('historico') ?>">Histórico</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="navegacao-item">
                <button class="navegacao-botao">
                    Atendimento ao Cidadão
                    <div class="seta-menu">
                        <img src="/assets/header/seta-para-baixo.png">
                    </div>
                </button>

                <div class="navegacao-mega_menu">
                    <div class="navegacao-mega_container">
                        <div class="navegacao-coluna">
                            <a href="<?= url('portal-processos') ?>">Portal de processos</a>
                            <a href="<?= url('consulta-processo') ?>">Consulta de processos</a>
                            <a href="<?= url('pesquisador-academico') ?>">Pesquisa acadêmica</a>
                            <a href="<?= url('acesso-acervo') ?>">Acesso ao acervo</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="navegacao-item">
                <button class="navegacao-botao">
                    Administração ao Servidor
                    <div class="seta-menu">
                        <img src="/assets/header/seta-para-baixo.png">
                    </div>
                </button>

                <div class="navegacao-mega_menu">
                    <div class="navegacao-mega_container">
                        <div class="navegacao-coluna">
                            <a href="<?= url('gestao-documental') ?>">Gestão Documental</a>
                            <a href="<?= url('orientacao') ?>">Orientação às Edocs</a>
                            <a href="<?= url('agorasei') ?>">AgoraSEI!</a>
                            <a href="<?= url('digitasampa') ?>">DigitaSampa</a>
                            <a href="<?= url('diario-oficial') ?>">Diário Oficial</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="navegacao-item">
                <button class="navegacao-botao">
                    Sistemas
                    <div class="seta-menu">
                        <img src="/assets/header/seta-para-baixo.png">
                    </div>
                </button>

                <div class="navegacao-mega_menu">
                    <div class="navegacao-mega_container">
                        <div class="navegacao-coluna">

                            <a href="https://sip.prefeitura.sp.gov.br/sip/modulos/pmsp/login/login.php?sigla_orgao_sistema=PMSP&sigla_sistema=SEI" target="_blank">
                                Sistema Eletrônico de Informações - SEI
                            </a>

                            <a href="https://sip.prefeitura.sp.gov.br/sip/login.php?sigla_orgao_sistema=PMSP&sigla_sistema=SIP&infra_url=L3NpcC8=" target="_blank">
                                Sistema de Permissões - SIP
                            </a>

                            <a href="https://treinamentosip4.prefeitura.sp.gov.br/sip/login.php?sigla_orgao_sistema=PMSP&sigla_sistema=SEI&infra_url=L3NlaS8=" target="_blank">
                                SEI - Treinamento
                            </a>

                            <a href="https://treinamentosip.prefeitura.sp.gov.br/sip/login.php?sigla_orgao_sistema=PMSP&sigla_sistema=SIP" target="_blank">
                                SIP - Treinamento
                            </a>

                            <a href="https://simprocantigo.prefeitura.sp.gov.br/SJ0934/servlet/LOGIN" target="_blank">
                                Sistema de Processos - SIMPROC
                            </a>

                            <a href="https://admin.cacplus.prefeitura.sp.gov.br/Autenticacao?ReturnUrl=%2fHome%2fIndex" target="_blank">
                                Controle de Acessos Corporativos - CAC
                            </a>

                            <a href="https://smgsuporte.prefeitura.sp.gov.br/index.php" target="_blank">
                                SMG Suporte - GLPI
                            </a>

                            <a href="http://tid.prodam.sp.gov.br/" target="_blank">
                                Tramitação Interna de Documentos - TID
                            </a>

                            <a href="https://processos.prefeitura.sp.gov.br/Forms/Principal.aspx" target="_blank">
                                Portal Administrativo de Processos
                            </a>

                            <a href="https://diariooficial.prefeitura.sp.gov.br/md_epubli_controlador.php?acao=inicio" target="_blank">
                                Diário Oficial
                            </a>

                        </div>
                    </div>
                </div>
            </li>

        </ul>

        <form action="/index.php" method="GET">
            <input type="hidden" name="page" value="pesquisa">

            <div class="container-wrapper">
                <div class="container">
                    <div class="input-wrapper">

                        <input type="text" name="q" placeholder="Pesquisar..." required>

                        <div id="sugestoes" class="box-sugestoes"></div>

                        <button type="submit" class="btn-busca">
                            <i class="fa fa-search" style="font-size:18px;color:#00072D"></i>
                        </button>

                    </div>
                </div>
            </div>
        </form>

    </nav>
</header>