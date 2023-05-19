<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$nome, $email, $senha]);

http_response_code(302);
header('location: /');

?>