<?php

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];

$fp = fopen('sensores.csv', 'a');
fputcsv($fp, [$identificador, $nome]);

header('location: listaSen.php');

?>