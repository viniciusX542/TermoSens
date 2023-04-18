<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/usuarios.css">
    <title>Usuarios</title>
</head>

<body>
    <header class="cabecalho">
        <a href="/"><img class="logo" src="/logo/icons8-termômetro-64.png" alt="Logo"></img></a>
        <img src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section>
        <table>
            <?php $fp = fopen('usuarios.csv', 'r') ?>
            <?php while (($row = fgetcsv($fp)) !== false) : ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td>
                        <form action="delete.php" method="GET">
                            <input type="hidden" name="identificador" value="<?= $row[0] ?>">
                            <button>Remover</button>
                        </form>
                    </td>
                    <td>
                        <a href="editar.php?identificador=<?= $row[0] ?>">Editar</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </table>

        <script>
            Array.from(document.querySelectorAll('.delete-form')).forEach(form => {
                form.addEventListener('submit', (e) =>{
                    if (!confirm("Tem certeza que deseja excluir este usuario?")) e.preventDefault()
                })
            })
        </script>
    </section>
    <button class="voltar-botao" onclick="location.href = document.referrer;">Voltar</button>
</body>

</html>