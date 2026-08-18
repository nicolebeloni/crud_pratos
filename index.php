<?php
include "../infra/conexao.php";

$user= mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>