<?php include 'database.php' ?>
<?php session_start(); ?>
<?php 

	// check if score is set_error_handler
	if (!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	}

	if (isset($_POST['submit'])) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number + 1;
		echo $number;
		echo $selected_choice;

		// get total questions

		echo $_SESSION['total'];


		$query = "select * from choices where question_number = $number AND is_correct = 1";

		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

		$row = $result->fetch_assoc();

		$correct_choice = $row['id'];

		if ($correct_choice == $selected_choice) {
			$_SESSION['score']++;
			echo $_SESSION['score'];
		}

		if ($number == $_SESSION['total']) {
			header("Location: final.php");
			exit();
		} else {
			header("Location: question.php?n=$next");
			exit();
		}
		
	}

 ?>