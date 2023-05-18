<?php

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];
$diasmedidos = $_POST['diasmedidos'];
$hora = $_POST['hora'];
$valor = $_POST['valor'];
$intervalo = $_POST['intervalo'];
$fp = fopen('medição.csv', 'a');
fputcsv($fp, [$identificador, $nome. $data, $hora, $valor]);

header('location: listaMed.php');

?>