<?php
$identificador = $_GET['identificador'];

$tempName = tempnam('.', '');

$temp = fopen($tempName, 'w');
$orig = fopen('medição.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] == $identificador) {
        continue;
    }
    fputcsv($temp, $row);
}
fclose($temp);
fclose($orig);

rename($tempName, 'medição.csv');

header('location: listaMed.php');
?>