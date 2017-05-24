<?php 

	// connect to database
	
	$mysqli = new mysqli("localhost", "root", "", "quizzer");

	// $con = mysqli_connect("localhost", "root", "", "quizzer");

	if($mysqli -> connect_error) {
		printf("Failed to connect to database : %s\n ", $mysqli -> connect_error);
		exit();
	}

 ?>