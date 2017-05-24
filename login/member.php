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
		
		echo "Welcome <b>$username</b>, <a href='./logout.php' >Logout</a>";
		
		}else
		
		echo "Please login to access this page. <a href='./login.php' >Login here</a>";
		
		?>
	</body>
</html>	