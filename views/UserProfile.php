<?php session_start();?>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.a{
			padding-top: 140px;
		}
		body{
			background-image: url("/QuizMaster/img/Blank.jpg");
			background-attachment: fixed;
			height: 100%;
			width: 100%;
			background-repeat:no-repeat;
			background-position: center;
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
		
		<div class="a" style="color:white">
			<center><h2>Welcome, <i><?php echo $_SESSION['sess_user']; ?></i></h2></center>
		</div>
		<br><br>
		<h4><?php if($_SESSION['role']=="student")
		{echo '<div class="container"  style="color:white"><div class="row">
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Name:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['sess_user'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">UserID:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['user_id'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Email:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['email'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Phone:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['phone'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Class:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['class'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Branch:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['branch'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Division:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['division'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Roll No:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['roll'].'</label></div>
			</div><br><br>
		  <center>
          <div class="col-xs-4 col-md-4"><a href="EditProfile.php"><button type="button" class="btn btn-primary">Edit Profile</button></a></div>
          <div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/ViewAllQuiz.php"><button type="button" class="btn btn-primary">View All Quiz</button></a></div>
          <div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/StudentViewResult.php"><button type="button" class="btn btn-primary">View Results</button></a></div>
        </div></div></center>';
		}
		else if($_SESSION['role']=="faculty")
		{echo '<div class="container"  style="color:white"><div class="row">
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Name:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['sess_user'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Employee Code:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['empcode'].'</label></div>
			</div>
			<br><br><center>
			<div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/CreateQuiz.php"><button type="button" class="btn btn-primary">Create New Quiz</button></a></div>
			<div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/ViewAllQuiz.php"><button type="button" class="btn btn-primary">View All Quiz</button></a></div>
			<div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/FacultyViewResult.php"><button type="button" class="btn btn-primary">View Results</button></a></div>
			</div></div></center>';
		}?>
		</h4>
	</body>
</html>