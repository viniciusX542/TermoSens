<?php

$identificador = $_POST['identificador'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmSenha'];


$fp = fopen('usuarios.csv', 'r');
while (($row = fgetcsv($fp)) !== false); {
    if ($row[1] == $email) {
        http_response_code(400);
        echo "Email já cadastrado";
        exit();
    }
}

$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$identificador, $nome, $email, $senha]);

http_response_code(302);
header('location: /');

?>