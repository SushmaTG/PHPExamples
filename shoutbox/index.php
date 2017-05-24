<?php include 'database.php' ;?>

<?php 

	// select query
	$query = "SELECT * FROM shouts";
	$shouts = mysqli_query($con, $query);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Remove the navbar's default margin-bottom and rounded borders */ 
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
		}

		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {height: 450px}

		/* Set gray background color and 100% height */
		.sidenav {
			padding-top: 20px;
			background-color: #f1f1f1;
			height: 100%;
		}

		/* Set black background color, white text and some padding */
		footer {
			background-color: #555;
			color: white;
			padding: 15px;
		}

		/* On small screens, set height to 'auto' for sidenav and grid */
		@media screen and (max-width: 767px) {
			.sidenav {
				height: auto;
				padding: 15px;
			}
			.row.content {height:auto;} 
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row form-group">
			<div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-8 col-lg-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-comment"></span> Comments
						<div class="btn-group pull-right">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-chevron-down"></span>
							</button>
							<ul class="dropdown-menu slidedown">
								<li>
									<a href="http://localhost/php_workspace/shoutbox/index.php"><span class="glyphicon glyphicon-refresh">
									</span>Refresh</a>
								</li>
								<li>
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
									</span>Available</a>
								</li>
								<li>
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
									</span>Busy</a>
								</li>
								<li>
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
									Away</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
										Sign Out</a>
								</li>
							</ul>
								</div>
							</div>
							<div class="panel-body body-panel">
								<ul class="chat">
									<?php while ($row = mysqli_fetch_assoc($shouts)): ?>
										<li class="left clearfix">
											<span class="chat-img pull-left">

											<img src="http://placehold.it/50/55C1E7/fff&text=<?php
											 $user_subString = substr($row['user'], 0, 1);
												echo $user_subString;
											?>" alt="User Avatar" class="img-circle" />
											</span>
											<div class="chat-body clearfix">
											<div class="header">
												<strong class="primary-font"><?php echo $row['user'] ?></strong> <small class="pull-right text-muted">
												<span class="glyphicon glyphicon-time"></span><?php echo $row['time'] ?></small>
											</div>
											<p>
												<?php echo $row['message'] ?>
											</p>
											</div>
										</li>
									<?php endwhile; ?>
									<!-- <li class="left clearfix">
										<span class="chat-img pull-left">
										<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
										</span>
										<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
											<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
											dolor, quis ullamcorper ligula sodales.
										</p>
										</div>
								</li>
								<li class="right clearfix">
									<span class="chat-img pull-right">
									<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
									</span>
									<div class="chat-body clearfix">
									<div class="header">
										<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
										<strong class="pull-right primary-font">Bhaumik Patel</strong>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
										dolor, quis ullamcorper ligula sodales.
									</p>
									</div>
							</li>
							<li class="left clearfix">
								<span class="chat-img pull-left">
								<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
									<span class="glyphicon glyphicon-time"></span>14 mins ago</small>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
									dolor, quis ullamcorper ligula sodales.
								</p>
								</div>
						</li>
						<li class="right clearfix">
							<span class="chat-img pull-right">
							<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
							<div class="header">
								<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
								<strong class="pull-right primary-font">Bhaumik Patel</strong>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
								dolor, quis ullamcorper ligula sodales.
							</p>
							</div>
					</li>
					<li class="left clearfix">
										<span class="chat-img pull-left">
										<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
										</span>
										<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
											<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
											dolor, quis ullamcorper ligula sodales.
										</p>
										</div>
								</li>
								<li class="right clearfix">
									<span class="chat-img pull-right">
									<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
									</span>
									<div class="chat-body clearfix">
									<div class="header">
										<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
										<strong class="pull-right primary-font">Bhaumik Patel</strong>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
										dolor, quis ullamcorper ligula sodales.
									</p>
									</div>
							</li>
							<li class="left clearfix">
								<span class="chat-img pull-left">
								<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
									<span class="glyphicon glyphicon-time"></span>14 mins ago</small>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
									dolor, quis ullamcorper ligula sodales.
								</p>
								</div>
						</li>
						<li class="right clearfix">
							<span class="chat-img pull-right">
							<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
							<div class="header">
								<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
								<strong class="pull-right primary-font">Bhaumik Patel</strong>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
								dolor, quis ullamcorper ligula sodales.
							</p>
							</div>
					</li> -->
				</ul>
			</div>

			<div class="panel-footer clearfix" id="input">
				<?php if (isset($_GET['error'])) : ?>
					<div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
				<?php endif; ?>
				<form method="post" action="process.php">
					<div class="col-lg-8">
					<input type="text" name="user" class="form-control" id="username" placeholder="Enter your Name">
					<textarea class="form-control" name="message" rows="3" placeholder="Enter your message"></textarea>
					<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12" style="margin-top: 10px">
					<button type="submit" class="btn btn-warning btn-lg btn-block" name="send" >Send</button>
				</span>
				</div>
				</form>
				<!-- <textarea class="form-control" rows="1"></textarea> -->
			</div>

		</div>
	</div>
</div>
</div>


</body>
</html>
