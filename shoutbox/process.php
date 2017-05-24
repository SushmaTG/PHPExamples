<?php 

	include 'database.php';

	// check if form was submitted

	// echo $_POST['user'] . " " . $_POST['message'];

	if (isset($_POST['send'])) {
		$user = mysqli_real_escape_string($con, $_POST['user']);
		$message = mysqli_real_escape_string($con, $_POST['message']);

		// set timezone
		date_default_timezone_set('America/New_York');
		$time = date('h:i:s a', time());

		// validate
		if (!isset($user) || $user == '' || !isset($message) || $message == '') {
			$error = "It seems you didnot fill your name and message";
			header("Location: index.php?error=".urlencode($error));
			exit();
		} else {
			$query = "INSERT INTO shouts (user, message, time) 
				VALUES ('$user', '$message', '$time')";

			if (!mysqli_query($con, $query)) {
				die('Error : '.mysqli_error($con));
			} else {
				header("Location: index.php");
				exit();
			}
			
		} 
		
	} 

 ?>