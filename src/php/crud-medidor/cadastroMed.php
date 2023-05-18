<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" href="/logo/icons8-termômetro-64.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Cadastro de Sensor</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section class="conteudo-principal">
        <?php $fp = fopen('medição.csv', 'r') ?>
        <h1 class="conteudo-principal-titulo">Cadastre-se</h1>
        <fieldset>
            <form id="form" action="./createMed.php" method="POST">
                <td><input id="identificador" type="text" class="identificador-cad" name="identificador" placeholder="Idenficiador" required></td>
                <div class="row">
                    <div class="col-12 col-s-12" id="divMensagensID">
                        <div class="alerta alerta-warning"></div>
                    </div>
                </div>
                <td><input id="nome" type="text" class="nome-cad" name="nome" placeholder="Nome do Sensor" required></td>
                <button type="submit" class="enviar-botao">Enviar</button>
                <input class="voltar-botao" id="voltar" action="action" type="button" value="Voltar" onclick="window.history.go(-1); return false;">
                <div class="col-12 col-s-12" id="divMensagensID">
                        <div class="alerta alerta-warning"></div>
                    </div>
                <td><input type="time" id="hora" name="hora" required></td>
                <td><input type="range" id="intervalo" name="tempo-para-medir" min="0" max="60">60</td>
                <td><input type="date" id="diasmedidos" name="historico" required></td>
                <td><input type='number' id='valor' name='valor-da-temperatura'></td>
            </form>
        </fieldset>

    </section>

</body>

</html>