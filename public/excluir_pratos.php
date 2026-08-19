<?php

include "../infra/conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM pratos WHERE id = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: listar_pratos.php");
    exit;
} else {
    echo "Erro ao excluir o prato.";
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);

?>