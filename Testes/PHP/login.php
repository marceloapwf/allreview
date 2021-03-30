<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if(isset($_SESSION["id"])){
		//header("Location: index.php");
	}


	if($_SERVER['REQUEST_METHOD'] == "POST"){


		if(isset($_POST['btn-login']) && $_POST['btn-login'] == "submit"){
	
			$email = $_POST['email'];
			$password = $_POST['password'];	

			if(!empty($email) && !empty($password) && !is_numeric($email)){
				

				$query = "select * from usuarios WHERE email = '$email' limit 1";
				$result = mysqli_query($con, $query);

				if($result){
					if(mysqli_num_rows($result) > 0){
						$user_data = mysqli_fetch_assoc($result);
						
						if($user_data['senha'] === $password){

							//agora posso basear todos meus acessos no valo de user_id, que está associado ao label 'user_id' na variavel $_SESSION
							//somente se tudo estiver certo é que vou registrar o user_id na variavel server-side $_SESSION
							$_SESSION['nome'] = $user_data['nome'];
							header("Location: PHP/index.php");
						}else{
							$senha_correta = false;
						}
					}
				}
			}else{
				$dados_validos = false;
			}
		}
	}
?>