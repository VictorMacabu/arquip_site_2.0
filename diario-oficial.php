<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/CSS/header.css">
    <link rel="stylesheet" href="/CSS/footer.css">
    <link rel="stylesheet" href="/CSS/main-pc.css">
    <link rel="stylesheet" href="/css/new-diario.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário Oficial Para O Cidadão</title>
</head>

<body>

    <?php require_once __DIR__ . "/views/header.php"
        ?>

    <div class="banner-estrutura">
        <div>
            <img class="img-esquerda" src="/assets/diario-oficial/img-diario.png" alt="Pessoas">
        </div>
        <div class="texto-banner">
            <h1>DIÁRIO OFICIAL PARA O CIDADÃO</h1>
            <p>O ARQUIP oferece o serviço de pesquisa de existência e planta para cidadãos e empresas que necessitam
                verificar a presença de documentos, como projetos arquitetônicos ou plantas de imóveis, no acervo
                municipal.
            </p>
        </div>
        <div>
            <img class="img-direita" src="/assets/diario-oficial/icone-diario.png" alt="Icone">
        </div>
    </div>

    <div class="container-pagina">
        <div class="card-secao">
            <div class="logo">
                <img class="logo-diario" src="/assets/diario-oficial/logo-diario.png" alt="Logo Diário">
            </div>

            <div class="pessoas">
                <img class="pessoas-diario" src="/assets/diario-oficial/pessoas-diario.png" alt="Pessoas Diario">

                <div class="box-um">
                    <img class="box-legislacao" src="/assets/diario-oficial/box-um.png" alt="Box Um">
                    <div class="txt-um">
                        <p>LEGISLAÇÃO</p>
                    </div>  
                </div>

                <div class="box-dois">
                    <img class="box-tutorias" src="/assets/diario-oficial/box-dois.png" alt="Box Dois">
                    <div class="txt-dois">
                        <p>TUTORAIS</p>  
                    </div>  
                </div>

                <div class="box-tres">
                    <img class="box-acesse" src="/assets/diario-oficial/box-tres.png" alt="Box Três">
                    <div class="txt-tres">
                        <p>ACESSE O DIÁRIO OFICIAL</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <?php require_once __DIR__ . "/views/footer.php"
    ?>




</body>

</html>