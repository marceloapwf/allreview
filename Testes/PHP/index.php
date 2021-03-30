<?php
    session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php if(isset($_SESSION['nome'])){ echo("Você, " . $_SESSION['nome'] . ", está logado."); }else{echo("Você não está logado.");} ?></h1>
</body>
</html>