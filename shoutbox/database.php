<?php 

	// connect to mysql

	$con = mysqli_connect("localhost", "root", "", "shouts");

	// test connection

	if (mysqli_connect_errno()) {
		echo 'Failed to connect to MySQL' .mysqli_connect_error();
	}

 ?>