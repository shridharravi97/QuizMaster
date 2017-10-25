<?php session_start(); ?>

<html>
	<head>
		<title>Create Quiz</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		h4{
			margin-top: 140px;
		}
		hr{
			margin-left: 0px;
			margin-right: 30px;
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
						<li><a href="/QuizMaster/views/ContactUs.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
						<li><a href="/QuizMaster/views/About.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" href="/QuizMaster/views/UserProfile.php">
								<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['sess_user']; ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="/QuizMaster/views/UserProfile.php">View Profile</a></li>
								<li class="divider"></li>
								<li><a href="/QuizMaster/views/CreateQuiz.php">Create New Quiz</a></li>
								<li><a href="/QuizMaster/views/ViewAllQuiz.php">View Quiz</a></li>
								<li class="divider"></li>
								<li><a href="/QuizMaster/views/FacultyChangePassword.php">Change Password</a></li>
							</ul>
						</li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<h4><?php
		{
			echo '<div class="container"  style="color:white"><div class="row">
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Quiz Name:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['quizname'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Total Questions:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['totalques'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Questions Added:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['count'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Class:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['quizclass'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Branch:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['quizbranch'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Division:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['quizdivision'].'</label></div>
			</div>
			<br><br>
			<div><label class="control-label col-sm-4 col-lg-4 col-md-4">Submit Before:</label>
				<div><label class="control-label col-sm-8 col-md-8 col-lg-8"> '.$_SESSION['quizlastdate'].'</label></div>
			</div><br><br><hr>';

			
			if($_SESSION['count']<$_SESSION['totalques'])
			{
				$count=$_SESSION['count']+1;
				echo '<form class="form-horizontal" method="POST" action="/QuizMaster/validation/InsertQuestions.php" style="color:white" name="insertquestions">
						<div><label class="control-label col-sm-1 col-lg-1 col-md-1">'.$count.':</label>
							<div class="col-sm-11">
								<input type="text-area" maxlength="500" class="form-control" name="question" placeholder="Enter Question (max. 500 characters)" required autocomplete="off">
							</div>
							<br><br><br>
							<label class="control-label col-sm-2 col-lg-2 col-md-2">A:</label>
							<div class="col-sm-4">
								<input type="text-area" maxlength="50" class="form-control" name="optA" placeholder="Enter Option A (max. 50 characters)" required autocomplete="off">
							</div>
							
							<label class="control-label col-sm-2 col-lg-2 col-md-2">B:</label>
							<div class="col-sm-4">
								<input type="text-area" maxlength="50" class="form-control" name="optB" placeholder="Enter Option B (max. 50 characters)" required autocomplete="off">
							</div>
							<br><br>
							<label class="control-label col-sm-2 col-lg-2 col-md-2">C:</label>
							<div class="col-sm-4">
								<input type="text-area" maxlength="50" class="form-control" name="optC" placeholder="Enter Option C (max. 50 characters)" required autocomplete="off">
							</div>
							
							<label class="control-label col-sm-2 col-lg-2 col-md-2">D:</label>
							<div class="col-sm-4">
								<input type="text-area" maxlength="50" class="form-control" name="optD" placeholder="Enter Option D (max. 50 characters)" required>
							</div>
							<br><br><br>
							<div class="form-group">
								<label class="control-label col-xs-2 col-md-2" for="answer">Answer:</label>
								<div class="col-sm-4">
									<select name="answer" style="color:black" required>
									<option value="" selected="true" disabled>Select Asnwer</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
									</select>
								</div>
							</div>
						</div><br><br>';
						echo '<div class="col-md-offset-2 col-sm-10 col-md-4">
								<center><button type="submit" class="btn btn-primary">Add Question</button></center>
								</div>
							</form>';
			}
			else
			{
				echo '<h2><center>All Questions have been added successfully!</h2><br>
						<div class="container" style="color:white"><div class="row">
							<div class="col-xs-3 col-md-3"><a href="/QuizMaster/views/ViewThisQuiz.php"><button type="button" class="btn btn-primary">View This Quiz</button></a></div>
							<div class="col-xs-3 col-md-3"><a href="/QuizMaster/views/CreateQuiz.php"><button type="button" class="btn btn-primary">Create New Quiz</button></a></div>
							<div class="col-xs-3 col-md-3"><a href="/QuizMaster/views/ViewAllQuiz.php"><button type="button" class="btn btn-primary">View All Quiz</button></a></div>
						</div></div></center>';
			}
		}?>
		</h4>
	</body>
</html>