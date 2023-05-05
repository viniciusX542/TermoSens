<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
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
            <form action="./entrar.php" method="POST">
                <div class="campo">
                    <td><input type="text" class="identificador-login" placeholder="Idenficiador" name="identificador" require/></td>
                </div>
                <div class="campo">
                    <td><input type="password" class="senha-login" placeholder="Senha" name="senha" require/></td>
                </div>
            </form>
            <button class="login-botao">Entrar</button>
            <a href="/"><button class="voltar-botao">Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>