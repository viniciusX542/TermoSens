<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

    $fp = fopen('usuarios.csv','r');
    while(($row = fgetcsv($fp)) !== false){
        if($row[3] ==$email && $row[4] == $senha){
         $_SESSION["auth"] == true;
        }
    }
    
$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$email, $senha]);

header('location: usuarios.php ')

?>