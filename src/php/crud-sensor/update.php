<?php
    $identificador = $_POST['identificador'];
    $nome = $_POST['nome'];
   
    $temName = tempnam('.', '');

    $temp = fopen($temName, 'w');
    $orig = fopen('sensores.csv', 'r');
    while (($row = fgetcsv($orig)) !== false) {
        if ($row[0] == $identificador) {
            fputcsv($temp, [$identificador, $nome]);
            continue;
        }
        fputcsv($temp, $row);
    }
    fclose($temp);
    fclose($orig);

    rename($temName, 'sensores.csv');

    header('location: listaSen.php');
?>