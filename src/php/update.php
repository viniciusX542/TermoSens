<?php 
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $temName = tempnam('.', '');

    $temp = fopen($temName, 'w');
    $orig = fopen('usuarios.csv', 'r');
    while (($row = fgetcsv($orig)) !== false) {
        if ($row[0] == $id) {
            fputcsv($temp, [$id, $nome, $email, $senha]);
            continue;
        }
        fputcsv($temp, $row);
    }
    fclose($temp);
    fclose($orig);

    rename($temName, 'usuarios.csv');

    header('location: usuarios.php');
?>