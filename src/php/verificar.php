<?php
session_start();


if (!isset($_SESSION["auth"])or $_SESSION["auth"] !== true) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logado</title>
</head>
<body>
    <h1>Ja esta cadastrado</h1>
</body>
</html>
<?php 
   /* $user = $_POST['user'];
    $fp = fopen('usuarios.csv','r');
    while( ($linha = fgetcsv($fp)) !== false){
        if($linha[0] == $user){
            echo 'jaCadastrado';
            return;
        }
    }*/
?>