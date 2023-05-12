<?php
    $tipo = $_POST['tipo'];
    $identificador = $_POST['identificador'];
    $nome = $_POST['nome'];
   
    $temName = tempnam('.', '');

    $temp = fopen($temName, 'w');
    $orig = fopen('sensores.csv', 'r');
    while (($row = fgetcsv($orig)) !== false) {
        if ($row[1] == $identificador) {
            fputcsv($temp, [$tipo, $identificador, $nome]);
            continue;
        }
        fputcsv($temp, $row);
    }
    fclose($temp);
    fclose($orig);

    rename($temName, 'sensores.csv');

    header('location: cadastroSen.php');
?>