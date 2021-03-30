<?php
	session_start();
		include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $user_name = $_POST['user_name'];
	    $password = $_POST['password'];	
        $password2 = $_POST['password2'];	

        if(!empty($user_name) && !empty($password) && !empty($password2) && !is_numeric($user_name)){

            if(!($password === $password2)){
                //aqui devo fazer alguma coisa que mude a tela de cadastro, dizendo que as senhas estao diferentes
                $senhas_iguais = false;
            }else{
                $query = "select * from users where user_name = '$user_name'";
                $result = mysqli_query($con, $query);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    $usuario_ja_registrado = true;

                }else{
        
                    $query = "insert into users (user_name, password) values ('$user_name', '$password')";
                    mysqli_query($con, $query);
                    header("Location: login.php");
                }
            }
        }
    }
?>