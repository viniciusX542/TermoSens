<?php
$identificador = $_POST["identificador"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["password"];

$usuarios = fopen("usuarios.csv", "r");
while(($row = fgetcsv($usuarios)) !==false){
    if($row[0]== $identificador){
        echo "o usuario esta em uso";
        exit();
    }
}

$usuarios =  fopen("usuarios.csv", "a");
fputcsv($usuarios,[$identificador,$nome,$email,$senha])
?>