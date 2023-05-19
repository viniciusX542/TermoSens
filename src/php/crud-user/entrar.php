<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/login.css">
    <link rel="icon" href="/logo/icons8-termômetro-64.png">
    <title>Entrar</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section class="conteudo-principal">
        <h1 class="conteudo-principal-titulo">Entre com sua conta</h1>
        <fieldset>
            <form action="../session/login.php" method="POST">
                <label for="email">Email:</label>
                <input id="email" class="input" type="text" class="identificador-login" placeholder="Email" name="email" require />
                <label for="senha">Senha:</label>
                <input id="senha" class="input" type="password" class="senha-login" placeholder="Senha" name="senha" require />
                <button type="submit" class="login-botao">Entrar</button>
                <input class="voltar-botao" id="voltar" action="action" type="button" value="Voltar" onclick="window.history.go(-1); return false;">
            </form>
        </fieldset>
    </section>

    <script defer src="../script/user/login.js"></script>

</body>

</html>