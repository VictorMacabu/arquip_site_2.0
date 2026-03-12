<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de Atendimento</title>
    <link rel="stylesheet" href="/css/atendimento.css">
    <link rel="shortcut icon" href="/assets/icone.site/Logo.ico" type="image/x-icon">
</head>

<body>

    <div class="box-atendimento">
        <header class="header-form">

            <div class="logo">
                <a href="index.php"> 
                    <img src="/assets/atendimento/logo-arquip.png" alt="Logo Arquip"> 
                </a>
            </div>

            <h2>Preencha este formulário para iniciar uma conversa</h2>

            <form>

                <label for="nome">Nome*</label>
                <input type="text" id="nome" placeholder="Informe o seu nome" required>

                <label for="email">E-mail*</label>
                <input type="email" id="email" placeholder="Informe o seu e-mail" required>

                <label for="telefone">Telefone*</label>
                <input type="tel" id="telefone" placeholder="Informe o seu telefone" required>

                <label for="mensagem">Sua pergunta*</label>
                <textarea id="mensagem" placeholder='Digite aqui sua mensagem e tecle "Enter" para enviar'></textarea>

                <label for="assunto">Assunto</label>
                <select id="assunto">
                    <option>Diário Oficial</option>
                    <option>Dúvida Sobre Consulta no prosseguimento do Pedido de Vistas</option>
                    <option>/</option>
                    <option>/</option>
                </select>

                <button type="submit">Iniciar bate-papo</button>

            </form>
    </div>
    </div>

</body>

</html>