<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/entrar.css">
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
            <?php $fp = fopen('usuarios.csv', 'r') ?>
            <form id="form" action="./session.php" method="POST">
                <div class="campo">
                    <td><input id="email" type="text" name="email" class="email-login" placeholder="Email" required /></td>
                </div>
                <div class="campo">
                    <td><input id="senha" type="password" name="senha" class="senha-login" placeholder="Senha" required /></td>
                </div>
                <button type="submit" class="login-botao">Entrar</button>
            </form>
            <a href="/"><button class="voltar-botao">Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>