<?php

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];
$ip = $_POST['ip'];
$diasmedidos = $_POST['diasmedidos'];
$hora = $_POST['hora'];
$temperatura = $_POST['temperatura'];
$intervalo = $_POST['intervalo'];

$fp = fopen('sensores.csv', 'a');
fputcsv($fp, [$identificador, $nome,$ip,$diasmedidos,$hora,$temperatura,$intervalo]);

header('location: listaSen.php');

?>