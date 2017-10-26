<?php session_start(); ?>
<html>
	<head>
		<title>View Quiz</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.a{
			padding-bottom: 70px;
		}
        h2{
            color: #fff;
            padding-top: 140px;
			
        }
		hr{
			margin-left: 220px;
			margin-right: 220px;
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
	   
<?php 
    $server="localhost";
    $user="faculty";
    $pwd="";
    $db="QuizMaster";
    
    $con=mysqli_connect("$server","$user","$pwd","$db");
    if(!$con)
        die("Connection failed: ".mysqli_error($con));

    $quizname=$_POST['quizname'];
    
    $sql="SELECT * from questions where quizname='".$quizname."' order by quesno";
    $result=mysqli_query($con,$sql);
    
    if(!$result)
        die("Query Failed: ".mysqli_error($con));
           
    else
    {
        echo '<h2><center>'.$quizname.'</center></h2>';
        if(mysqli_num_rows($result)>0)
        {
			while($get=mysqli_fetch_array($result))
			{
				$quizname=$get[1];
				$quesno=$get[2];
				$question=$get[3];
				$optA=$get[4];
				$optB=$get[5];
				$optC=$get[6];
				$optD=$get[7];
				$answer=$get[8];

                echo '<h4><div class="container"  style="color:white"><div class="row">
				    <div><label class="control-label col-sm-1 col-lg-1 col-md-1">'.$quesno.'.</label></div>
				    <div><label class="control-label col-sm-11 col-md-11 col-lg-11"> '.$question.'</label></div><br><br><br>
					<div><label class="control-label col-sm-2 col-lg-2 col-md-2">A: </label>
					   <div class="col-sm-4"><input type="text-area" style="color:black" disabled value='.$optA.'></div>
					</div>
				    <div><label class="control-label col-sm-2 col-lg-2 col-md-2">B: </label>
						<div class="col-sm-4"><input type="text-area" style="color:black" disabled value='.$optB.'></div>
					</div><br><br>
					<div><label class="control-label col-sm-2 col-lg-2 col-md-2">C: </label>
						<div class="col-sm-4"><input type="text-area" style="color:black" disabled value='.$optC.'></div>
					</div>
					<div><label class="control-label col-sm-2 col-lg-2 col-md-2">D: </label>
						<div class="col-sm-4"><input type="text-area" style="color:black" disabled value='.$optD.'></div>
					</div><br><br><br>
					<div><label class="control-label col-sm-2 col-lg-2 col-md-2">Answer: </label>
						<label class="control-label col-sm-4 col-lg-4 col-d-4">'.$answer.'</label>
					</div>
					</div></div>
					<hr><br></h4>';
			}
        }
    }
?>
           <div class="container a" style="color:white"><div class="row"><center>
			<div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/CreateQuiz.php"><button type="button" class="btn btn-primary">Create New Quiz</button></a></div>
			<div class="col-xs-4 col-md-4"><a href="/QuizMaster/views/ViewAllQuiz.php"><button type="button" class="btn btn-primary">View All Quiz</button></a></div>
		</center></div></div>
        
    </body>
</html>