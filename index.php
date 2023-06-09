<?php
session_start();
if (isset($_SESSION['auth'])) {
    header('location: /src/php/crud-sensor/indexSen.php');
    exit();
} else {
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/index.css">
    <link rel="icon" href="/logo/icons8-termômetro-64.png">
    <title>TermoSens</title>
</head>

<body>
    <header class="cabecalho">
        <h1 class="cabecalho-titulo">TermoSens</h1>
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>

        </nav>
    </header>

    <section class="conteudo-principal">
        <div class="conteudo-principal-botoes">
            <a href="./src/php/crud-user/entrar.php"><button class="login-botao">Entrar</button></a>
            <a href="./src/php/crud-user/cadastro.php"><button class="cadastro-botao">Cadastro</button></a>
            <h1 class="conteudo-principal-texto">Não possui uma conta?<a href="/src/php/crud-user/cadastro.php" class="cadastro-texto">Cadastre-se.</a></h1>
        </div>
    </section>
</body>

</html>