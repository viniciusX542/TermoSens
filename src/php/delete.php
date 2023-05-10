<?php
$email = $_GET['email'];

$tempName = tempnam('.', '');

$temp = fopen($tempName, 'w');
$orig = fopen('usuarios.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[1] == $email) {
        continue;
    }
    fputcsv($temp, $row);
}
fclose($temp);
fclose($orig);

rename($tempName, 'usuarios.csv');

header('location: usuarios.php');
?>