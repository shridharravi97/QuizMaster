<?php
    session_start();
?>

<html lang="en">
	<head>
		<title>About Us</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body{
			background-image: url("/QuizMaster/img/About.png"), url("/QuizMaster/img/Blank.jpg");
			background-attachment: scroll, fixed;
			height: 100%, 100%;
			width: 100%, 100%;
			background-repeat: no-repeat, no-repeat;
			background-position: center, center;
			}
        .a{
            padding-top: 240px;
            }
        .b{
            margin-left: 120px;
            margin-right: 120px;
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
						<li><a href="/QuizMaster/views/ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
						<li class="active"><a href="/QuizMaster/views/About.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
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
        <center><div class="container-fluid a">
            <div class="container-fluid b">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-responsive img-rounded" src="/QuizMaster/img/1.jpg" height="200" width="250">
                        <h3 style="color:white">Shridhar Ravi</h3>
                        <h4 style="color:white">Back-End Developer</h4>
                        <a href="https://www.facebook.com/shridharravi97" target="_blank"><i class="fa fa-facebook-square" style="font-size:50px;color:white"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://github.com/shridharravi97" target="_blank"><i class="fa fa-github" style="font-size:50px; color: white"></i></a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-responsive img-rounded" src="/QuizMaster/img/2.jpg" height="200" width="250">
                        <h3 style="color:white">Siddhanth V</h3>
                        <h4 style="color:white">Front-End Developer</h4>
                        <a href="https://www.facebook.com/siddhanth.iyer.5" target="_blank"><i class="fa fa-facebook-square" style="font-size:50px;color:white"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" target="_blank"><i class="fa fa-github" style="font-size:50px; color: white"></i></a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-responsive img-rounded" src="/QuizMaster/img/3.jpg" height="200" width="250">
                        <h3 style="color:white">Pradyumna Bapat</h3>
                        <h4 style="color:white">Web Designer</h4>
                        <a href="https://www.facebook.com/pradyumna.bapat" target="_blank"><i class="fa fa-facebook-square" style="font-size:50px;color:white"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" target="_blank"><i class="fa fa-github" style="font-size:50px; color: white"></i></a>
                    </div>
                </div>
            </div>
        </div></center>
	</body>
</html>