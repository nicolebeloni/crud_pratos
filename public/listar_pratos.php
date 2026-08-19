<?php

include "../infra/conexao.php";

$sql = "SELECT * FROM pratos";
$resultado = mysqli_query($conexao, $sql);

$sql = "UPDATE pratos SET nome='$nome',descricao='$descricao',preco='$preco',categoria='$categoria' WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratos cadastrados</title>
</head>

<body>

    <h1>Pratos cadastrados</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        <?php while ($prato = mysqli_fetch_assoc($resultado)) { ?>

            <tr>
                <td><?= $prato['id'] ?></td>
                <td><?= $prato['nome'] ?></td>
                <td><?= $prato['descricao'] ?></td>
                <td><?= $prato['preco'] ?></td>
                <td><?= $prato['categoria'] ?></td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>