<?php include 'header.php'; ?>
<?php session_start(); ?>
		
		<div class="container">
			<h2>You're Done</h2>
			<p>Congrat's you've completed the test</p>
			<p>Final Score : <?php echo $_SESSION['score']; ?></p>
		</div>

<?php include 'footer.php'; ?>