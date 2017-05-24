<?php include 'database.php'; ?>
<?php include 'header.php'; ?>
	
	<div class="container col-lg-9">
		<h2>Add a question</h2>
		<form method="POST" action="add.php">
			<div>
				<table>
					<tr>
						<td><strong>Question Number: </strong></td>
						<td>
							<input class="form-control" type="number" name="question_number">
						</td>
					</tr>
					<tr>
						<td><strong>Question Text: </strong></td>
						<td>
							<input class="form-control" type="text" name="question_text">
						</td>
					</tr>
					<tr>
						<td><strong>Choice #1: </strong></td>
						<td>
							<input class="form-control" type="text" name="choice1">
						</td>
					</tr>
					<tr>
						<td><strong>Choice #2: </strong></td>
						<td>
							<input class="form-control" type="text" name="choice2">
						</td>
					</tr>
					<tr>
						<td><strong>Choice #3: </strong></td>
						<td>
							<input class="form-control" type="text" name="choice3">
						</td>
					</tr>
					<tr>
						<td><strong>Choice #4:</strong></td>
						<td>
							<input class="form-control" type="text" name="choice4">
						</td>
					</tr>
					<tr>
						<td><strong>Correct choice number: </strong></td>
						<td>
							<select class="form-control" >
								<option name="correct_choice" value="1">choice1</option>
								<option name="correct_choice" value="2">choice2</option>
								<option name="correct_choice" value="3">choice3</option>
								<option name="correct_choice" value="4">choice4</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<button value="submit" name="submit" class="btn btn-success">Submit your question</button>
		</form>
	</div>

<?php include 'footer.php'; ?>