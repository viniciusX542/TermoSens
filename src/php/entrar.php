<?php

session_start();

$identificador = $_POST['email'];
$senha = $_POST['senha'];

    $fp = fopen('usuarios.csv','r');
    while(($row = fgetcsv($fp)) !== false){
        if($row[2] ==$email && $row[3] == $senha){
         $_SESSION["auth"] == true; 
        }
    }
    
$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$identificador, $senha]);

header('location: / ')
?>