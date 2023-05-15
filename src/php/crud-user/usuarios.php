

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
        <img class="usuario-logo" src="/logo/icons8-usuário-67.png" alt="Usuario">
        <nav>
        </nav>
    </header>

    <section>
        <div class="tabela">
            <table>
                <tr class="tabela-titulos">
                    <td class="tipo-titulo">Usuario</td>
                    <td class="id-titulo">ID</td>
                    <td class="nome-titulo">Nome</td>
                    <td class="email-titulo">Email</td>
                    <td class="senha-titulo">Senha</td>
                </tr>

                <?php $fp = fopen('usuarios.csv', 'r') ?>
                <?php while (($row = fgetcsv($fp)) !== false) : ?>
                    <tr class="usuarios-lista">
                        <td class="tipo-usuario"><?= $row[0]?></td>
                        <td class="id-usuario"><?= $row[1] ?></td>
                        <td class="nome-usuario"><?= $row[2] ?></td>
                        <td class="email-usuario"><?= $row[3] ?></td>
                        <td class="senha-usuario"><?= $row[4] ?></td>
                        <td>
                            <form id="delete-form" action="delete.php" method="GET">
                                <input type="hidden" name="identificador" value="<?= $row[1] ?>">
                                <button class="remover-botao">Remover</button>
                            </form>
                        </td>
                        <td>
                            <a href="editar.php?nome=<?= $row[2] ?>"><button class="editar-botao">Editar</button></a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </table>
            <a href="/"><button class="voltar-botao">Voltar</button></a>
        </div>

        <script>
            Array.from(document.querySelectorAll('.delete-form')).forEach(form => {
                form.addEventListener('submit', (e) => {
                    if (!confirm("Tem certeza que deseja excluir este usuario?")) e.preventDefault()
                    alert("Tem certeza que deseja excluir este usuario?")
                })
            })
        </script>
    </section>
    <!--     <button class="voltar-botao" onclick="location.href = document.referrer;">Voltar</button>
 -->
</body>

</html>