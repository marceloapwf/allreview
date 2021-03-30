<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "loginDB";

	if(!$con = new mysqli($dbhost, $dbuser, $dbpassword, $dbname)){
		die("A conexão falhou.");
	}

?>
