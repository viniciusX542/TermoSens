<?php

session_start();
//Verificação de request
// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     exit();
// }

// if (!isset($_POST['email']) || !isset($_POST['nome']) || !isset($_POST['sobrenome']));

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmSenha'];


;

    $fp = fopen('usuarios.csv','r');
    while(($row = fgetcsv($fp)) !== false){
        if($row[0] ==$identificador){
         $_SESSION["auth"] == true;  
        }
    }
    
 $fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$identificador, $nome, $email, $senha]);

    header('location:./verificar.php')
?>

//Verificação de integridade



//Salvando

// if (!file_exists('usuarios.csv')) {
//     exit();
// }



//http_response_302