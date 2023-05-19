<?php
$identificador = $_GET['identificador'];
$fp = fopen('medição.csv', 'r');
$data = [];

while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $identificador) {
        $data = $row;
        break;
    }
}
if (sizeof($data) == 0) {
    header('location: cadastroMed.php');
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
        <h1>Dados do identificador: <?= $identificador ?></h1>
    </section>
    <section>
        <form id="form" action="./update.php" method="POST">
            <td><input id="identificador" type="text" class="identificador-cad" name="identificador" placeholder="Idenficiador" maxlength="15" min="15" value="<?= $data[0] ?>"></td>
            <td><input id="nome" type="text" class="nome-cad" name="nome" placeholder="Nome Completo" maxlength="50" min="20" value="<?= $data[1] ?>"></td>
            <td><input type="time" id="hora" name="hora" required></td>
            <td><input type="range" id="intervalo" name="tempo-para-medir" min="0" max="60">60</td>
            <td><input type="date" id="diasmedidos" name="historico" required></td>
            <td><input type='number' id='valor' name='valor-da-temperatura'></td>
            <button type="submit" class="enviar-botao">Enviar</button>
            <input class="voltar-botao" id="voltar" action="action" type="button" value="Voltar" onclick="window.history.go(-1); return false;">
        </form>
    </section>
</body>

</html>