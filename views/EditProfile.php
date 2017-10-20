<?php session_start(); ?>

<html>
	<head>
		<title>Edit Profile</title>
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
			background-image: url("/QuizMaster/img/EditProfile.png"), url("/QuizMaster/img/Blank.jpg");
			background-attachment: scroll, fixed;
			height: 100%, 100%;
			width: 100%, 100%;
			background-repeat: no-repeat, no-repeat;
			background-position: center, center;
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
								<?php if($_SESSION['role']=="student")
								{
									echo '<li><a href="/QuizMaster/views/ChangePassword.php">Change Password</a></li>';
								}
								else if($_SESSION['role']=="faculty")
								{
									echo '<li><a href="/QuizMaster/views/FacultyChangePassword.php">Change Password</a></li>';
								}?>
							</ul>
						</li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<form class="form-horizontal a" method="POST"  style="color:white" action="/QuizMaster/validation/UpdateValidate.php">
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="name">Full Name:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="name" value="<?php echo $_SESSION['sess_user']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="username">Username:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" disabled>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="email">Email:</label>
				<div class="col-sm-4">
					<input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="phone">Phone:</label>
				<div class="col-sm-1">
					<input type="text" disabled value="+91" class="form-control" id="code">
				</div>
				<div class="col-sm-3">
					<input type="tel" maxlength="10" minlength="10" class="form-control" name="phone" value="<?php echo $_SESSION['phone']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="class">Class:</label>
				<div class="col-sm-4">
					<select name="class" style="color:black" required>
							<option selected="true"><?php echo $_SESSION['class']; ?></option>
							<option>FE</option>
							<option>SE</option>
							<option>TE</option>
							<option>BE</option>
						</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="branch">Branch:</label>
				<div class="col-sm-4">
					<select name="branch" style="color:black" required>
							<option selected="true"><?php echo $_SESSION['branch']; ?></option>
							<option>C.E.</option>
							<option>M.E.</option>
							<option>E.X.T.C.</option>
							<option>P.P.T.</option>
							<option>I.T</option>
						</select>
					</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="division">Division:</label>
				<div class="col-sm-4">
					<select name="division" style="color:black" required>
							<option selected="true"><?php echo $_SESSION['division']; ?></option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							<option>E</option>
							<option>F</option>
						</select>
					</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3 col-md-4" for="RNo">Roll Number:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="roll" value="<?php echo $_SESSION['roll']; ?>" disabled>
				</div>
			</div>
			
			<div class="col-md-offset-2 col-sm-10 col-md-4">
				<center><button type="submit" class="btn btn-primary">Update</button></center>
			</div>
			
		</form>
	</body>
</html>