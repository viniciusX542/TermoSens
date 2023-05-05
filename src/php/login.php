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
            <form id="form" action= "./adicionar.php" method="POST">
                <div class="campo">
                    <td><input id ="identificador" type="text" class="identificador-login" placeholder="Idenficiador" /></td>
                </div>
                <div class="campo">
                    <td><input id="senha" type="password" class="senha-login" placeholder="Senha" /></td>
                </div>
                </div>
                <button type="submit" class="login-botao">Entrar</button>
            </form>
            <a href="/"><button class="voltar-botao">Voltar</button></a>
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
                        msg1.textContent = "Esse verificador já está cadastrado";

                        var divMensagens1 = document.querySelector("#divMensagensID");
                        divMensagens1.appendChild(msg1);

                    } else {
                        form.submit();
                    }
                }
            }
            const dados = new FormData();
            dados.append('user', ver.value);
            test.open('POST', './verificar.php', true);
            test.send(dados);
        });
    </script>
</body>

</html>