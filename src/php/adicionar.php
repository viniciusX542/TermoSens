<?php

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

//Verificação de integridade

$fp = fopen('usuarios.csv', 'r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $identificador) {
        http_response_code(400);
        echo "Identificador em uso!";
        exit();
    }
}

//Salvando

// if (!file_exists('usuarios.csv')) {
//     exit();
// }

$fp = fopen('usuarios.csv', 'a');
fputcsv($fp, [$identificador, $nome, $email, $senha, $confirmSenha]);

//http_response_302

header('location: index.php');

?>