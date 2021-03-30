<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if(isset($_SESSION["id"])){
		header("Location: index.php");
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];	

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
			

			$query = "select * from users WHERE user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if(mysqli_num_rows($result) > 0){
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){

						//agora posso basear todos meus acessos no valo de user_id, que está associado ao label 'user_id' na variavel $_SESSION
						//somente se tudo estiver certo é que vou registrar o user_id na variavel server-side $_SESSION
						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
					}else{
						$senha_correta = false;
					}
				}
			}
		}else{
			$dados_validos = false;
		}
	}
?>


<!doctype html>
<html>
	<head>
		<title>Login</title>
		<link href="main.css" rel="stylesheet"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<div class="forms">
				<h2 class="titleLogin">Login</h2>
				<form method="post">
					<div class="inputUser-Password">
						<input type="text" placeholder="Username" name="user_name">
					</div>
					<div class="inputUser-Password">
						<input type="password" placeholder="Password" name="password">
					</div>
					<div id="submitDiv">
						<input id="submitButton" type="submit" value="Enviar">
					</div>
					<div class="links">
						<a href="signup.php">Cadastre-se aqui!</a><br>
						<a href="">Esqueceu sua senha?</a>						
					</div>
					<div class="inputUser-Password">
					<?php 
						if(isset($senha_correta) && $senha_correta === false){
							echo("Senha Incorreta.");
						}
						if(isset($dados_validos) && $dados_validos === false){

							echo("Os dados inseridos são inválidos.");
						}
					?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>