<?php
    session_start();
    include("connection.php");
    
    if(isset($_POST["pesquisa"])){
        $pesquisa = $_POST["pesquisa"];
    }else{
        $pesquisa = "XXXXXXXXXXXXX";
    }
    $query = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisa%'";


    // Get Result
    $result = mysqli_query($con, $query);
    
    // Fetch Data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($users);




