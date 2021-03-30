<?php 
	session_start();
		include("connection.php");
		include("functions.php");

		$user_data = pega_dados($con);

		if(!isset($_SESSION["id"])){
			header("Location: login.php");
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<h1>Você está logado</h1>
	<form method="post">
		<a href="signout.php">Logout</a>
	</form>
</body>
</html>