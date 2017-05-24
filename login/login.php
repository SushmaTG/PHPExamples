<?php 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
	<meta content="text/html; charset=utf-8" />
	<body>
		<?php 
		
		if ($userid && $username) {
		
		echo "You have already logged in as <b>$dbuser</b>. <a href='./member.php'>Click here</a> to go to the member page ";
		
		} else {
			$form = "<form action = './login.php' method = 'post' >
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
					<td><input type = 'submit' name='login_button' value = 'login' /></td>
				</tr>
				<tr>
					<td><a href='./register.php'>Register</a></td>
					<td><a href='./forgotpassword.php'>Forgot password</a></td>
				</tr>
			</table>
			</form>";
			
			if ($_POST['login_button']) {
				$user = $_POST['user'];
				$password = $_POST['password'];
				
				if ($user) {
				
					if($password) {

//						require("connect.php");
						
						$password = md5(md5("gygdjkd" .$password. "khfuehs"));
						
//						echo "$password";

						$myConnection= mysqli_connect("localhost", "root", "", "mydb") or die ("could not connect to mysql"); 

						if (mysqli_connect_errno()) {
  					  	printf("Connect failed: %s\n", mysqli_connect_error());
    					exit();
						}  
						
//						$conn = mysqli_connect();
						
						$query = mysqli_query( $myConnection ,"SELECT * FROM users WHERE username='$user'");
						
						$numrows = mysqli_num_rows($query);	
						
						if($numrows == 1){
						
						$row = mysqli_fetch_assoc($query);
						
						$dbid = $row['id'];
						$dbuser = $row['username'];
						$dbpass = $row['password'];
						$dbmail = $row['email'];
						
							if ($password == $dbpass){
							
							$_SESSION['userid'] = $dbid;
							$_SESSION['username'] = $dbuser;
							echo "You have been logged in as <b>$dbuser</b>. <a href='./member.php'>Click here</a> to go to the member page ";
							
							}else
							
							echo "You didnot enter the correct password. $form";
							
						} else					
						
						mysqli_close();					
						
//						echo "$user - $password <hr/> $form"; 
					
					}
					else
					
						echo "You must enter your password. $form";
				
				}
				else
				
					echo "You must enter your username. $form";
			
			}else
			
				echo $form;
			}
		?>
	</body>
</html>