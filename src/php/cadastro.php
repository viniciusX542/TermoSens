<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" href="/logo/icons8-termômetro-64.png">
    <title>Cadastro</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <nav>
        </nav>
    </header>

    <section class="conteudo-principal">
        <?php $fp = fopen('usuarios.csv', 'r') ?>
        <h1 class="conteudo-principal-titulo">Cadastro</h1>
        <fieldset>
        <form action="usuarios.csv" method="post">
            <div class="campo">
                <td><input type="text" class="identificador-Cad" name="identificador" placeholder="Idenficiador" /></td>
            </div>
            <div class="campo">
                <td><input type="text" class="nome-Cad" name="nome" placeholder="Nome Completo" /></td>
            </div>
            <div class="campo">
                <td><input type="email" class="email-Cad" name="email" placeholder="Email" /></td>
            </div>
            <div class="campo">
                <td><input type="password" class="senha-Cad" name="senha" placeholder="Senha" /></td>
            </div>
            <div class="campo">
                <td><input type="password" class="confirm-senha-Cad" name="confirmSenha" placeholder="Confirmar Senha" /></td>
            </div>
            <button class="enviar-Botao">Enviar</button>
            </fieldset>
    </section>
</body>

</html>