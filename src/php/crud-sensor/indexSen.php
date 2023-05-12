<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="icon" href="./logo/icons8-termômetro-64.png">
    <title>TermoSens</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="./logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>

        </nav>
    </header>

    <section class="conteudo-principal">
        <div class="conteudo-principal-botoes">
            <a href="../crud-sensor/listaSen.php"><button class="login-botao">Sensores</button></a>
            <a href="../crud-sensor/cadastroSen.php"><button class="cadastro-botao">Cadastre um Sensor</button></a>
        </div>
        <button class="voltar-botao" onclick="location.href = document.referrer;">Sair da conta</button>
    </section>
</body>

</html>