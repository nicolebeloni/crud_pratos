<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO livros (nome,descricao,preco,categoria) VALUES ('$nome','$descricao','$preco','$categoria')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pratos</title>
</head>

<body>

    <h1>Cadastro de Pratos</h1>

    <form action="cadastrar_usuario.php" method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Descrição:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Preço:</label>
        <input type="float" name="preco" required>

        <br><br>

        <label>Categoria:</label>
        <input type="char" name="categoria" required>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>