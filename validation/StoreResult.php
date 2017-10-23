<?php
    session_start();
    $server="localhost";
	$user="student";
	$pwd="";
	$db="QuizMaster";
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		die("Connection Failed: ".mysqli_error($con));
	
	$studans=$_POST['studans'];
	$quizid=$_SESSION['quiz_id'];
	$rollno=$_SESSION['roll'];
	$answer=$_SESSION['answer'];
	$quesno=$_SESSION['count']+1;
	$sql="INSERT INTO result(id,quesno,rollno,studans,answer) values ('$quizid','$quesno','$rollno','$studans','$answer')";
	$result=mysqli_query($con,$sql);
	if(!$result)
		die("Query Failed: ".mysqli_error($con));
	
	else
	{
		$_SESSION['count']=$_SESSION['count']+1;
		if($_SESSION['count']<$_SESSION['total_ques']-1)
		{
            
			header("Location: /QuizMaster/views/AttemptQuiz.php");
		}
		else
		{
			$query="SELECT count(rollno) from result where rollno='".$rollno."' and id='".$quizid."' and studans=answer";
			$qresult=mysqli_query($con,$query);
			if(!$qresult)
				die("Result Calculation failed: ".mysqli_error($con));
			else
			{
				if(mysqli_num_rows($qresult)>0)
				{
					$get=mysqli_fetch_array($qresult);
					$_SESSION['marks']=$get[0];
                  header("Location: /QuizMaster/views/AttemptQuiz.php");
				}
			}
						
		}
	}
?>