<?php session_start(); ?>

<html lang="en">
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		h4,h2{
			color: #fff;
			}
		hr{
			margin-left: 240px;
			margin-right: 240px;
			}
		body{
           	background-image: url("/QuizMaster/img/Blank.jpg");
			background-attachment: fixed;
			height: 100%;
			width: 100%;
			background-repeat:no-repeat;
			background-position: center;
			}

		iframe{
			padding-top: 110px;
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
						<li class="active"><a href="/QuizMaster/views/ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
						<li><a href="/QuizMaster/views/About.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
							if(!isset($_SESSION['sess_user']))
							{
								echo '<li><a href="/QuizMaster/views/SignUpPage.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
								echo '<li><a href="/QuizMaster/views/LoginPage.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
							}
							else
							{
								echo '<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="/QuizMaster/views/UserProfile.php">
											<span class="glyphicon glyphicon-user"></span> '.$_SESSION['sess_user'].' <span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="/QuizMaster/views/UserProfile.php">View Profile</a></li>';
								if($_SESSION['role']=="student")
								{
									echo '<li class="divider"></li>
											<li><a href="/QuizMaster/views/ChangePassword.php">Change Password</a></li>';
								}
								else if($_SESSION['role']=="faculty")
								{
									echo '<li class="divider"</li>
											<li><a href="/QuizMaster/views/FacultyChangePassword.php">Change Password</a></li>';
								}

								echo '</ul>
									</li>';
								echo '<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
							}
						?>						
					</ul>
				</div>
			</div>
		</nav>
		
		<center><iframe width="60%" height="70%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJzYUsXtvD5zsRboFzfS3FJu8&zoom=18&key=AIzaSyAkqp6wFkgki3a1ERD1baQcwpqHpjKrR3I" allowfullscreen></iframe></center>
		<hr>
		<center>
			<h2><span class="glyphicon glyphicon-map-marker"></span> Address</h2>
			<h4>Sri Chandrasekarendra Saraswati Vidyapuram Sector-V, Nerul, Navi Mumbai - 400706.</h4>
            <h4><span class="glyphicon glyphicon-earphone"></span> Phone: 022-61082400/02/27/17/19</h4>
	</body>
</html>