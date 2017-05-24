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
		
			session_destroy();
			echo "You have been logged out. <a href='./member.php' >Member</a>";
		
		}else
		
			echo "You are not logged in";
		
		?>
	</body>
</html>	