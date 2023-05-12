<?php

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];

$fp = fopen('sensores.csv', 'a');
while (($row = fgetcsv($fp)) !== false); {
    if ($row[0] == $identificador) {
        http_response_code(400);
        echo "Pessoa já cadastrada";
        exit();
    }
}

$fp = fopen('sensores.csv', 'a');
fputcsv($fp, [$identificador, $nome]);

http_response_code(302);
header('location: listSen.php');

?>