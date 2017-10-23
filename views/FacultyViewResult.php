<?php session_start(); ?>
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
		h4{
			padding-top: 140px;
			padding-bottom: 70px;
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
                            </ul></li>
						<li><a href="/QuizMaster/validation/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
        <h4>
        <?php
            $server="localhost";
            $user="faculty";
            $pwd="";
            $db="QuizMaster";
    
            $con=mysqli_connect("$server","$user","$pwd","$db");
            if(!$con)
                die("Connection failed: ".mysqli_error($con));

            $sql="SELECT * from questionindex where empcode='".$_SESSION['empcode']."' order by id";
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
                                <th>Class</th>
                                <th>Branch</th>
                                <th>Division</th>
                                <th>Total Questions</th>
                                <th>Submit Before</th>
                            </tr>
                        </thead>
                        <tbody>';
                if(mysqli_num_rows($result)>0)
                {
                    while($res=mysqli_fetch_array($result))
                    {
                        $quizname=$res[6];
                        $class=$res[3];
                        $branch=$res[4];
                        $division=$res[5];
                        $totalques=$res[1];
                        $lastdate=$res[8];
                
                        echo '<tr style="color:white">
                                <td>'.$quizname.'</td>
                                <td>'.$class.'</td>
                                <td>'.$branch.'</td>
                                <td>'.$division.'</td>
                                <td>'.$totalques.'</td>
                                <td>'.$lastdate.'</td>
                                </tr>';
                    }
                }
            }
            echo '</tbody></table></div>';
        
            echo '<form class="form-horizontal" method="POST" action="/QuizMaster/views/FacultyResults.php"><div class="form-group" style="color:white">
                    <label class="control-label col-xs-4 col-md-4" for="quizname">Which Quiz Result Do You Wish To View?</label>
                    <div class="col-xs-8">
			             <select name="quizname" style="color:black" required>
                            <option value="quizname" selected="true" disabled>Select Quiz Name</option>';
        
            $sql="SELECT * from questionindex where empcode='".$_SESSION['empcode']."' order by id";
            $result=mysqli_query($con,$sql);

            if(!$result)
                die("Query Failed: ".mysqli_error($con));
        
            else
            {
                if(mysqli_num_rows($result)>0)
                {
                    while($res=mysqli_fetch_array($result))
                    {
                        $quizname=$res[6];
                        echo '<option>'.$quizname.'</option>';
                    }
                }
            }
            echo '</select></div></div>
                    <center><button type="submit" class="btn btn-primary">View Results</button></center>';
        ?>
        </h4>
    </body>
</html>
