<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pratos_alana_nicole_m3";
$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");

?>
