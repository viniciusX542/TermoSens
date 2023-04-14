<!DOCTYPE html>
<html lang="pt-br">

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
            <form id="form" action="./adicionar.php" method="POST">
                <td><input id="identificador" type="text" class="identificador-cad" name="identificador" placeholder="Idenficiador" required></td>
                <td><input type="text" class="nome-cad" name="nome" placeholder="Nome Completo" required></td>
                <td><input type="email" class="email-cad" name="email" placeholder="Email" required></td>
                <td><input id="senha" type="password" class="senha-cad" name="senha" placeholder="Senha" required></td>
                <td><input id="confirme" type="password" class="confirm-senha-cad" name="confirmSenha" placeholder="Confirmar Senha" required></td>
                <!--<button type="submit" class="enviar-botao">Enviar</button>
-->
                <input type="submit">
            </form>
            <a href="/"><button class="voltar-botao" >Voltar</button></a>
        </fieldset>
    </section>
    <script>
        const form = document.getElementById("form");
        const senha = document.getElementById("senha");
        const confirme = document.getElementById("confirme");
        const ver = document.getElementById("identificador");
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            if(senha.value !== confirme.value) {
                alert('Senhas diferentes, porfavor tente novamente');
            }
            const test = new XMLHttpRequest();
            test.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    if(this.responseText == 'jaCadastrado') {
                        alert('Este email ou usuario já está registrado.');
                    } else {
                        form.submit();
                    }
                }
            }
            const dados = new FormData();
            dados.append('user',ver.value);
            test.open('POST','./verificar.php', true);
            test.send(dados);
        });
    </script>
</body>

</html>