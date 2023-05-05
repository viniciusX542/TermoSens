<?php

session_start();

$identificador = $_POST['identificador'];
$senha = $_POST['senha'];

    $fp = fopen('usuarios.csv','r');
    while(($row = fgetcsv($fp)) !== false){
        if($row[0] ==$identificador && $row == $senha){
         $_SESSION["auth"] == true;  
        }
    }
    
 $fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$identificador, $senha]);

    header('location:./verificar.php')
?>