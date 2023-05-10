<?php 

$email = $_POST['email'];
$senha = $_POST['senha'];
$userFile = fopen("usuarios.csv", 'r');

while( ($linha = fgetcsv($userFile)) !== false){
    if($linha[1] == $email && $senha == $linha[2]){
        http_response_code(202);
        session_start();
        $_SESSION['auth'] = true;
        header('location: usuarios.php');
    }
}

?>