<?php 
    $user = $_POST['user'];
    $fp = fopen('usuarios.csv','r');
    while( ($linha = fgetcsv($fp)) !== false){
        if($linha[0] == $user){
            echo 'jaCadastrado';
            return;
        }
    }
?>