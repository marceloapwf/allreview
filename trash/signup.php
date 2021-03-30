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


<!doctype html>
<html>
	<head>
		<title>Signup</title>
		<link href="main.css" rel="stylesheet"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<div class="forms">
				<h2 class="titleLogin">Cadastro</h2>
				<form method="post">
					<div class="inputUser-Password">
						<input type="text" placeholder="Username" name="user_name">
					</div>
					<div class="inputUser-Password">
						<input type="password" placeholder="Password" name="password">
					</div>
                    <div class="inputUser-Password">
						<input type="password" placeholder="Password" name="password2">
					</div>
					<div id="submitDiv">
						<input id="submitButton" type="submit" value="Enviar">
					</div>
                    <div class="inputUser-Password">
                    <?php 
                        if(isset($password) && isset($password2) && ($password != $password2)){
                            echo("Senhas diferentes.");
                        }
                        if(isset($usuario_ja_registrado)){
                            echo("Nome de usuário já cadastrado.");
                        }
                    ?>
                    </div>
				</form>
			</div>
		</div>
	</body>
</html>