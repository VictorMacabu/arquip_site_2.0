<?php
if (!function_exists('url')) {
    function url($page)
    {
        return "/index.php?page=" . $page;
    }
}
?>

<header>
    <div id="overlay"></div>
    <div class="header_container">

        <div class="cabecalho-btn">
            <button class="btn-hamburguer" id="btnHamburguer">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="logo_arquip">
            <a href="/">
                <img class="cabecalho-logo_arquip" src="assets/header/icone_arquip.png" alt="Arquip">
            </a>
        </div>

        <div class="container_navegacao">
            <nav class="navegacao">
                <ul class="navegacao-lista">
                    <li class="navegacao-item">
                        <button class="navegacao-botao">
                            <span class="navegacao-texto">Institucional</span>
                            <span class="chevron" aria-hidden="true"></span>
                        </button>

                        <div class="navegacao-mega_menu">
                            <div class="navegacao-mega_container">
                                <div class="navegacao-coluna">
                                    <a href="<?= url('quem-somos') ?>">Quem somos?</a>
                                    <a href="<?= url('estrutura-organizacional') ?>">Estrutura Organizacional</a>
                                    <a href="<?= url('sistemas-arquivos') ?>">Sistema de Arquivos</a>
                                </div>

                                <div class="navegacao-coluna">
                                    <a href="<?= url('gestao-documental') ?>">Política de Gestão Documental</a>
                                    <a href="<?= url('legislacoes') ?>">Legislações</a>
                                    <a href="<?= url('historico') ?>">Histórico</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="navegacao-item">
                        <button class="navegacao-botao">
                            <span class="navegacao-texto">Atendimento ao cidadão</span>
                            <span class="chevron" aria-hidden="true"></span>
                        </button>
                        <div class="navegacao-mega_menu">
                            <div class="navegacao-mega_container">
                                <div class="navegacao-coluna">
                                    <a href="<?= url('portal-processos') ?>">Portal de Processos</a>
                                    <a href="<?= url('consulta-processo') ?>">Consulta de Processos</a>
                                    <a href="<?= url('pesquisa-processo') ?>">Pesquisa de Processos/Plantas</a>
                                    <a href="<?= url('pesquisador-academico') ?>">Pesquisador Acadêmico</a>
                                    <a href="<?= url('acesso-acervo') ?>">Acesso ao Acervo</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="navegacao-item">
                        <button class="navegacao-botao">
                            <span class="navegacao-texto">Administração pública</span>
                            <span class="chevron" aria-hidden="true"></span>
                        </button>
                        <div class="navegacao-mega_menu">
                            <div class="navegacao-mega_container">
                                <div class="navegacao-coluna">
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
                            <span class="navegacao-texto">Sistemas</span>
                            <span class="chevron" aria-hidden="true"></span>
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
                                </div>

                                <div class="navegacao-coluna">
                                    <a href="https://simprocantigo.prefeitura.sp.gov.br/SJ0934/servlet/LOGIN" target="_blank">
                                        Sistema de Processos - SIMPROC
                                    </a>
                                    <a href="https://admin.cacplus.prefeitura.sp.gov.br/Autenticacao?ReturnUrl=%2fHome%2fIndex" target="_blank">
                                        Controle de Acessos Corporativos - CAC
                                    </a>
                                    <a href="https://smgsuporte.prefeitura.sp.gov.br/index.php" target="_blank">
                                        SMG Suporte - GLPI
                                    </a>
                                </div>

                                <div class="navegacao-coluna">
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
            </nav>
        </div>

        <div class="header_botao">
            <button class="btn-acessar">
                Acessar
            </button>
        </div>

        <div class="logo_gestao">
            <a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/gestao/" target="_blank">
                <img class="cabecalho-logo_gestao" src="assets/header/icone_gestao.png" alt="Gestão">
            </a>
        </div>
    </div>
</header>
<script src="/js/click.js"></script>
<script src="/js/hamburgue.js"></script>