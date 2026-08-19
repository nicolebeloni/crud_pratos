<?php

include "../infra/conexao.php";

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados</title>
</head>

<body>

    <h1>Usuários cadastrados</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>

        <?php while ($usuario = mysqli_fetch_assoc($resultado)) { ?>

            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>