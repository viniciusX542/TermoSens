<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit();
}
    $fp = fopen('../usuarios.csv','r');

    while(($row = fgetcsv($fp)) !== false){
        if($row[3] ==$_POST['email'] && $row[4] == $_POST['senha']){
            if(isset($_POST['auth'])) {
            echo "certo";
            exit();
            }
            session_start();
            $_SESSION['logar'] = $row[0];
            $_SESSION['autht'] == true;
            header('location: ../crud-sensor/indexSen.php ');
            exit();
        }
    }
    echo "errado";
    return;
?>