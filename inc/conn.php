<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "blog_app";

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
		die("Database Connetion Failed". mysql_error($conn));
	}else{
		// echo "Database Connetion Sucess..";
	}

?>