<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" href="/logo/icons8-termômetro-64.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Cadastro Sensors</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section class="conteudo-principal">
        <?php $fp = fopen('sensores.csv', 'r') ?>
        <h1 class="conteudo-principal-titulo">Cadastre-se</h1>
        <fieldset>
            <form id="form" action="./createSen.php" method="POST">
                <td><input id="identificador" type="text" class="identificador-cad" name="identificador"
                        placeholder="Idenficiador" maxlength="15" min="15" required></td>
                <div class="row">
                    <div class="col-12 col-s-12" id="divMensagensID">
                        <div class="alerta alerta-warning"></div>
                    </div>
                </div>
                <td><input id="nome" type="text" class="nome-cad" name="nome" placeholder="Nome do Sensor" maxlength="50"
                        min="20" required></td>
                <button type="submit" class="enviar-botao">Enviar</button>
            </form>
            <button class="voltar-botao" onclick="location.href = document.referrer;">Voltar</button>
        </fieldset>

    </section>

    <script>
        const form = document.getElementById("form");
        const senha = document.getElementById("senha");
        const confirme = document.getElementById("confirme");
        const ver = document.getElementById("identificador");

        
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            var divMensagens = document.querySelector("#divMensagens");
            divMensagens.textContent = ""

            if (senha.value !== confirme.value) {
                var msg = document.createElement("div");
                msg.classList.add("alerta")
                msg.classList.add("alerta-warning");
                msg.textContent = "As senhas não coincidem";

                var divMensagens = document.querySelector("#divMensagens");
                divMensagens.appendChild(msg);
            }
            const test = new XMLHttpRequest();
            test.onreadystatechange = function () {
                var divMensagens1 = document.querySelector("#divMensagensID");
                divMensagens1.textContent = "";

                if (this.readyState === 4 && this.status === 200) {
                    if (this.responseText == 'jaCadastrado') {
                        var msg1 = document.createElement("div");
                        msg1.classList.add("alerta")
                        msg1.classList.add("alerta-warning");
                        msg1.textContent = "Esse identificador já está cadastrado";

                        var divMensagens1 = document.querySelector("#divMensagensID");
                        divMensagens1.appendChild(msg1);

                    } else {
                        form.submit();
                    }
                }
            }
            const dados = new FormData();
            dados.append('user', ver.value);
            test.open('POST', './verification.php', true);
            test.send(dados);
        });
    </script>

</body>

</html>