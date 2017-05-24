<?php 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
	<meta content="text/html; charset=utf-8" />
	<title>Please fill the form to register</title>
	
	<body>
	
	<?php
	
			$form = "<form action = './successful.php' method = 'post' >
			<table>
				<tr>
					<td>Username: </td>
					<td><input type = 'text' name = 'user' /></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type = 'password' name = 'password' /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type = 'email' name='email' /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type = 'submit' name='register' value = 'register' /></td>
				</tr>				
			</table>
			</form>";
			
			if ($_POST['register']){
			
			$user = $_POST['user'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
				if ($user == $username){
				
					echo "User already exists";
				
				}
				
			}
	 
 	?>
	</body>
</html>