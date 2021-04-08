<?php
    session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    

    <title>Principal</title>
</head>
<body>
    <ul class="navbar">
        <li class = "navbar-item item-1">
            <button class="btn-opcoes"><span class="navText">Opção 1</span></button>
            <button class="btn-opcoes"><span class="navText"> Opção 2</span></button>
            <button class="btn-opcoes"><span class="navText">Opção 3</span></button>
        </li>
        <li class = "navbar-item item-2">
            <input type="text" id = "pesquisa" placeholder="Pesquise aqui...">
            <button id="btn-pesquisa" onclick="ajax_post();"><span class="navText" ></span></button>
        </li>
        <li class = "navbar-item item-3">
            <span class="navText"><?php 
            if(isset($_SESSION['nome'])){
                echo($_SESSION['nome']);
                }?>
            </span>
        </li>
    </ul>
    <div class="container">
        <div class="content-most-searched"></div>
        <div class="content-searched">
        <table id="tableSearch" style="width:50%">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
            </tr>
            
        </div>
        
    </div>

    <div id="footer">

    </div>

    <script src="../JS/index.js"></script>
</body>
</html>
