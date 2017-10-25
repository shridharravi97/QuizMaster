<?php session_start(); ?>
<html>
	<head>
		<title>Attempt Quiz</title>
		<meta charset="utf-8">
		<meta  name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" href="/QuizMaster/img/QM.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.l{
			padding-left: 220px;
		}
        .f{
            font-size: 40px;
            }
        form{
            padding-left:220px;
            padding-top:50px;
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
								<li><a href="/QuizMaster/views/ViewAllQuiz.php">View Quiz</a></li>
								<li><a href="/QuizMaster/views/StudentViewResult.php">View Result</a></li>
								<li class="divider"></li>
								<li><a href="/QuizMaster/views/ChangePassword.php">Change Password</a></li>
							</ul>
						</li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
        
        <?php
            $server="localhost";
            $user="student";
            $pwd="";
            $db="QuizMaster";
            $con=mysqli_connect("$server","$user","$pwd","$db");
        
            if(!$con)
                die("Connection Failed: ".mysqli_error($con));
        
            if($_SESSION['count']==0)
            {
                $quizname=$_POST['quizname'];
                $_SESSION['quiz_name']=$quizname;
            }
            
             echo '<h2><center>'.$_SESSION['quiz_name'].'</center></h2>';
        
            $sql1="SELECT totalques,id from questionindex where quizname='".$_SESSION['quiz_name']."'";
            $query=mysqli_query($con,$sql1);
            if($query)
            {
                $get=mysqli_fetch_array($query);
                $totalques=$get[0];
				$_SESSION['total_ques']=$totalques;
				$_SESSION['quiz_id']=$get[1];
            }
            
            echo '<h4><div style="color:white" class="l">Total Questions: '.$totalques.'</div><div style="color:white" class="l">Questions Attempted: '.$_SESSION['count'].'</div></h4><hr>';
            if($_SESSION['count']<$totalques)
            {
                $count=$_SESSION['count']+1;
                $sql="SELECT * from questions where quizname='".$_SESSION['quiz_name']."' and quesno='".$count."' order by quesno";
                $result=mysqli_query($con,$sql);
                if(!$result)
                    die("Query Failed: ".mysqli_error($con));
                
                else
                {
                    if(mysqli_num_rows($result)>0)
                    {
                        $res=mysqli_fetch_array($result);
                        $quesno=$res[2];
                        $question=$res[3];
                        $optA=$res[4];
                        $optB=$res[5];
                        $optC=$res[6];
                        $optD=$res[7];
                        $_SESSION['answer']=$res[8];
                        echo '<h4><form class="form-horizontal" method="POST" style="color:white" action="/QuizMaster/validation/StoreResult.php">
                        <b><div style="font-size: 25px" class=" col-sm-1 col-lg-1 col-md-1">'.$count.'.</div>
                        <div style="font-size: 25px" class=" col-sm-11 col-lg-11 col-md-11">'.$question.'</div><br><br></br></b>
                        <div class="col-sm-1 col-lg-1 col-md-1">A:</div>
                        <div class="col-sm-5 col-lg-5 col-md-5">'.$optA.'</div>
                        <div class="col-sm-1 col-lg-1 col-md-1">B:</div>
                        <div class="col-sm-5 col-lg-5 col-md-5">'.$optB.'</div><br><br>
                        <div class="col-sm-1 col-lg-1 col-md-1">C:</div>
                        <div class="col-sm-5 col-lg-5 col-md-5">'.$optC.'</div>
                        <div class="col-sm-1 col-lg-1 col-md-1">D:</div>
                        <div class="col-sm-5 col-lg-5 col-md-5">'.$optD.'</div><br><br>
                        <div class="form-group">
                        <label class="control-label col-xs-2 col-md-2" for="answer">Answer:</label>
                        <div class="col-sm-4">
							<select name="studans" style="color:black" required>
							<option value="" selected="true" disabled>Select Answer</option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							</select>
						</div>
					   </div>
                       <div class="col-md-offset-2 col-sm-10 col-md-4">
                        <center><button type="submit" class="btn btn-primary">Save & Next</button></center>
                        </div></div>
				        </form></h4>';
                    }
                }
            }
            else
            {
                echo '<h4 style="color:white" class="f"><center>Your Respnse has been Submitted successfully!</center></h4><br>
						<h6 style="color:white" class="f"><center>You answered '.$_SESSION['marks'].' out of '.$totalques.' questions correctly!</h6>';
            }
        ?>
    </body>
</html>