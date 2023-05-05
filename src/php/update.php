<?php
    $tipo = $_POST['tipo'];
    $identificador = $_POST['identificador'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $temName = tempnam('.', '');

    $temp = fopen($temName, 'w');
    $orig = fopen('usuarios.csv', 'r');
    while (($row = fgetcsv($orig)) !== false) {
        if ($row[1] == $identificador) {
            fputcsv($temp, [$tipo, $identificador, $nome, $email, $senha]);
            continue;
        }
        fputcsv($temp, $row);
    }
    fclose($temp);
    fclose($orig);

    rename($temName, 'usuarios.csv');

    header('location: usuarios.php');
?>