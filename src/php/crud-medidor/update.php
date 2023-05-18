<?php
    $identificador = $_POST['identificador'];
    $nome = $_POST['nome'];
    $diasmedidos = $_POST['diasmedidos'];
    $hora = $_POST['hora'];
    $valor = $_POST['valor'];
    $intervalo = $_POST['intervalo'];
   
    $temName = tempnam('.', '');

    $temp = fopen($temName, 'w');
    $orig = fopen('medição.csv', 'r');
    while (($row = fgetcsv($orig)) !== false) {
        if ($row[0] == $identificador) {
            fputcsv($temp, [$identificador, $nome, $diasmedidos, $hora, $valor, $intervalo]);
            continue;
        }
        fputcsv($temp, $row);
    }
    fclose($temp);
    fclose($orig);

    rename($temName, 'medição.csv');

    header('location: listaMed.php');
?>