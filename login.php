<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php $usuarios = fopen("usuarios.csv","r") ?>
<? while(($row = fgetcsv($usuarios))!==false): ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
        <td><?= $row[3] ?></td>
    </tr>
    <?php endwhile?> 
    

   <button><a href="http://localhost:8000">Voltar</a></button>
</body>
</html>