<?php include 'database.php';?>

<?php 

	$number = (int) $_GET['n'];

	$query = "SELECT * FROM questions where question_number = $number";

	$query_choices = "SELECT * FROM choices where question_number = $number";

	$result = $mysqli -> query($query) or die($mysqli -> error.__LINE__);

	$result_choices = $mysqli -> query($query_choices) or die($mysqli -> error.__LINE__);

	$question = $result -> fetch_assoc();

	session_start();

	// $choices = $result_choices -> fetch_assoc();

 ?>

<?php include 'header.php'; ?>


								<div>PHP Questionare</div>
								<div>Question <?php echo $question['question_number']; ?> of <?php echo $_SESSION['total'] ?></div>
									<p><strong><?php echo $question['text']; ?></strong></p> 
									<form method="POST" action="process.php">
										<ul class="list-group">
											<?php while ($choices = $result_choices -> fetch_assoc()) : ?>
												<li class="list-group-item"><input name="choice" type="radio" value="<?php echo $choices['id']; ?>"><span> <?php echo ' ' .$choices['text']; ?></span></li>
											<?php endwhile;  ?>
										</ul>
										<input name="submit" type="submit" value="Verify">
										<input type="hidden" name="number" value="<?php echo $number; ?>">
										<a href="http://localhost/php_workspace/quizer/question.php?n=<?php echo $_GET['n']+1; ?>">Next</a>
									</form>
								

<?php include 'footer.php'; ?>