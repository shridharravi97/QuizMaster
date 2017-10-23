<?php
    session_start();
?>

<html>
	<head>
		<title>View Result</title>
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
        h4{
            padding-top: 140px;
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
        <h4>
        <?php
            $server="localhost";
            $user="student";
            $pwd="";
            $db="QuizMaster";
            $con=mysqli_connect("$server","$user","$pwd","$db");
            if(!$con)
                die("Connection Failed: ".mysqli_error($con));
        
            $sql="SELECT id,count(rollno) from result where rollno='".$_SESSION['roll']."' and studans=answer group by id";
            $result=mysqli_query($con,$sql);
            if(!$result)
                die("Query Failed: ".mysqli_error($con));
            else
            {
                echo '<div class="container">
                        <div class="table-responsive">
                        <table class="table" align="center">
                            <thead style="color:white">
                                <tr>
                                    <th>Quiz Name</th>
                                    <th>Quiz By</th>
                                    <th>Total Questions</th>
                                    <th>Your Score</th>
                                </tr>
                            </thead>
                            <tbody style="color:white">';
                if(mysqli_num_rows($result)>0)
                {
                    while($res=mysqli_fetch_array($result))
                    {
                        $quizid=$res[0];
                        $marks=$res[1];
                        
                        $query="SELECT quizname,empcode,totalques from questionindex where id='".$quizid."'";
                        $qresult=mysqli_query($con,$query);
                        if(!$qresult)
                            die("Query Failed: ".mysqli_error($con));
                        else
                        {
                            $get=mysqli_fetch_array($qresult);
                            $quizname=$get[0];
                            $empcode=$get[1];
                            $totalques=$get[2];
                            
                            $query2="SELECT empname from faculty where empcode='".$empcode."'";
                            $nresult=mysqli_query($con,$query2);
                            if(!$nresult)
                                die("Query Failed: ".mysqli_error($con));
                            else
                            {
                                $nget=mysqli_fetch_array($nresult);
                                $empname=$nget[0];
                            }
                        }
                        
                        echo '<tr>
                                <td>'.$quizname.'</td>
                                <td>'.$empname.'</td>
                                <td>'.$totalques.'</td>
                                <td>'.$marks.'</td>
                            </tr>';
                    }
                }
                    
            }
            echo '</tbody></table></div>';
        ?>
        </h4>
    </body>
</html>