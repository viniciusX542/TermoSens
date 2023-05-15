<?php
$nome = $_GET['nome'];
$fp = fopen('usuarios.csv', 'r');
$data = [];

while (($row = fgetcsv($fp)) !== false) {
    if ($row[2] == $nome) {
        $data = $row;
        break;
    }
}
if (sizeof($data) == 2) {
    header('location: usuarios.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/editar.css">
    <title>Editar</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>
    <section>
        <h1>Dados do identificador: <?= $nome ?></h1>
    </section>
    <section>
        <form id="form" action="./update.php" method="POST">
            <td><input id="tipo" type="text" class="tipo-cad" name="tipo" placeholder="tipo" maxlength="15" min="15" value="<?= $data[0] ?>"></td>
            <td><input id="identificador" type="text" class="identificador-cad" name="identificador" placeholder="Idenficiador" maxlength="15" min="15" value="<?= $data[1] ?>"></td>
            <td><input id="nome" type="text" class="nome-cad" name="nome" placeholder="Nome Completo" maxlength="50" min="20" value="<?= $data[2] ?>"></td>
            <td><input id="email" type="email" class="email-cad" name="email" placeholder="Email" maxlength="25" value="<?= $data[3] ?>"></td>
            <td><input id="senha" type="password" class="senha-cad" name="senha" placeholder="Senha" maxlength="20" minlength="8" value="<?= $data[4] ?>"></td>
            <td><input id="confirme" type="password" class="confirm-senha-cad" name="confirmSenha" placeholder="Confirmar Senha" maxlength="20" minlength="8" value="<?= $data[5] ?>"></td>
            <button type="submit" class="enviar-botao">Enviar</button>
            <input class="voltar-botao" action="action" type="button" value="Voltar" onclick="window.history.go(-1); return false;">
        </form>
    </section>
</body>

</html>