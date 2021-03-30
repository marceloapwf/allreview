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