<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <table>
    <tr>
<th>Identificador</th>
<th>Nome</th>
<th>Email</th>
<th>Senha</th>
</tr>
<?php $usuarios = file("usuarios.csv");?>
   <?php foreach($usuarios as $row)?>
         <? list($identificador, $nome,$email,$senha) = explode("," , $row)?>
         <tr>
            <td> <?=$identificador?></td>
            <td> <?=$nome?></td>
            <td> <?=$email?></td>
            <td> <?=$senha?></td>
        </tr>
    
</table>
<form action="adicionar.php" method="POST">
    <input type="text"name="identificador"placeholder="identificador">
    <input type="text"name="nome"placeholder="Nome">
    <input type="email"name="email"placeholder="Email">
    <input type="password" name="password"placeholder="Senha">
    <input type="submit"> 

</form>
    <button><a href="http://localhost:8000">Inicio</a></button>
</body>
</html>