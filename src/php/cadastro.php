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
        <img src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section class="conteudo-principal">
        <?php $fp = fopen('usuarios.csv', 'r') ?>
        <h1 class="conteudo-principal-titulo">Cadastro</h1>
        <fieldset>
            <form action="adicionar.php" method="POST">
                <div class="campo">
                    <td><input type="text" class="identificador-cad" name="identificador" placeholder="Idenficiador" />
                    </td>
                </div>
                <div class="campo">
                    <td><input type="text" class="nome-cad" name="nome" placeholder="Nome Completo" /></td>
                </div>
                <div class="campo">
                    <td><input type="email" class="email-cad" name="email" placeholder="Email" /></td>
                </div>
                <div class="campo">
                    <td><input type="password" class="senha-cad" name="senha" placeholder="Senha" /></td>
                </div>
                <div class="campo">
                    <td><input type="password" class="confirm-senha-cad" name="confirmSenha" placeholder="Confirmar Senha" /></td>
                </div>
            </form>
            <a href="" ><button class="enviar-botao">Enviar</button></a>
            <a href="/"><button class="voltar-botao" >Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>