<?php

$identificador = $_GET['identificador'];

$temp = tempnam(',', '');

$fpOrigin = fopen('usuarios.csv', 'r');
$fpTemp = fopen($temp, 'w');

while (($row = fgetcsv($fpOrigin)) !== false ) {
    if ($row[0] != $identificador) {
        fputcsv($fpTemp, $row);
    }
}

$fpOrigin = fopen('usuarios.csv', 'w');
$fpTemp = fopen($temp, 'r');
while (($row = fgetcsv($fpTemp)) !== false ) {
    fputcsv($fpOrigin, $row);
}

unlink($temp);

http_response_code(302);
header('location: usuarios.php');
?>
