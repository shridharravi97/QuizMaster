<<<<<<< HEAD
<?php session_start(); ?>

<html>
	<head>
		<title>Change Password</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.a{
			padding-top: 240px;
			}
		body{
			background-image: url("/QuizMaster/img/ChangePassword.png"), url("/QuizMaster/img/Blank.jpg");
			background-attachment: scroll, fixed;
			height: 100%, 100%;
			width: 100%, 100%;
			background-repeat: no-repeat, no-repeat;
			background-position: center, center;
            overflow-x: hidden;
			}
		</style>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="/QuizMaster/views/HomePage.php"><b>QuizMaster</b></a>
				</div>
				 <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="/QuizMaster/views/HomePage.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="/QuizMaster/views/ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
						<li><a href="/QuizMaster/views/About.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" href="/QuizMaster/views/UserProfile.php">
								<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['sess_user']; ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="/QuizMaster/views/UserProfile.php">View Profile</a></li>
								<li class="divider"></li>
								<li><a href="/QuizMaster/views/FacultyChangePassword.php">Change Password</a></li>
							</ul>
						</li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<form class="form-horizontal a" method="POST" style="color:white" action="/QuizMaster/validation/UpdateFacultyPassword.php">
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="currpwd">Enter Current Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="currpwd" placeholder="Enter Current Password" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="newpwd">Enter New Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="newpwd" minlength="8" placeholder="Enter New Password" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="renewpwd">Re-type New Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="renewpwd" minlength="8" placeholder="Re-type New Password" required>
			</div>
		</div>
		
		<div class="col-md-offset-2 col-sm-10 col-md-4">
				<center><button type="submit" class="btn btn-primary">Update</button></center>
		</div>
	</body>
=======
<?php session_start(); ?>

<html>
	<head>
		<title>Change Password</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.a{
			padding-top: 240px;
			}
		body{
			background-image: url("/QuizMaster/img/ChangePassword.png"), url("/QuizMaster/img/Blank.jpg");
			background-attachment: scroll, fixed;
			height: 100%, 100%;
			width: 100%, 100%;
			background-repeat: no-repeat, no-repeat;
			background-position: center, center;
            overflow-x: hidden;
			}
		</style>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="/QuizMaster/views/HomePage.php"><b>QuizMaster</b></a>
				</div>
				 <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="/QuizMaster/views/HomePage.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="/QuizMaster/views/ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
						<li><a href="/QuizMaster/views/About.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" href="/QuizMaster/views/UserProfile.php">
								<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['sess_user']; ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="/QuizMaster/views/UserProfile.php">View Profile</a></li>
								<li class="divider"></li>
								<li><a href="/QuizMaster/views/FacultyChangePassword.php">Change Password</a></li>
							</ul>
						</li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<form class="form-horizontal a" method="POST" style="color:white" action="/QuizMaster/validation/UpdateFacultyPassword.php">
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="currpwd">Enter Current Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="currpwd" placeholder="Enter Current Password" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="newpwd">Enter New Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="newpwd" minlength="8" placeholder="Enter New Password" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-xs-3 col-md-4" for="renewpwd">Re-type New Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="renewpwd" minlength="8" placeholder="Re-type New Password" required>
			</div>
		</div>
		
		<div class="col-md-offset-2 col-sm-10 col-md-4">
				<center><button type="submit" class="btn btn-primary">Update</button></center>
		</div>
	</body>
>>>>>>> Store Result changes
</html>