<<<<<<< HEAD
<?php
	
	session_start();
	$server="localhost";
	$user="faculty";
	$pwd="";
	$db="QuizMaster";
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";

	$quizname=$_POST['quizname'];
	$totalques=$_POST['totalques'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$division=$_POST['division'];
	$empcode=$_SESSION['empcode'];
	$lastdate=$_POST['lastdate'];
	$qdate=date("Y-m-d");
	
	$sql="INSERT INTO questionindex(quizname,totalques,class,branch,division,empcode,lastdate,qdate) values('$quizname','$totalques','$class','$branch','$division','$empcode','$lastdate','$qdate')";

	if(mysqli_query($con,$sql))
	{
		$_SESSION['quizname']=$quizname;
		$_SESSION['totalques']=$totalques;
		$_SESSION['quizclass']=$class;
		$_SESSION['quizbranch']=$branch;
		$_SESSION['quizdivision']=$division;
		$_SESSION['quizlastdate']=$lastdate;
		$_SESSION['count']=0;
		header("Location: /QuizMaster/views/QuestionsPage.php");
	}


	else
	{
		echo '<script>alert("Please enter a Unique Quiz Name");
				window.location.href="/QuizMaster/views/CreateQuiz.php";</script>';
	}
=======
<?php
	
	session_start();
	$server="localhost";
	$user="faculty";
	$pwd="";
	$db="QuizMaster";
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";

	$quizname=$_POST['quizname'];
	$totalques=$_POST['totalques'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$division=$_POST['division'];
	$empcode=$_SESSION['empcode'];
	$lastdate=$_POST['lastdate'];
	$qdate=date("Y-m-d");
	
	$sql="INSERT INTO questionindex(quizname,totalques,class,branch,division,empcode,lastdate,qdate) values('$quizname','$totalques','$class','$branch','$division','$empcode','$lastdate','$qdate')";

	if(mysqli_query($con,$sql))
	{
		$_SESSION['quizname']=$quizname;
		$_SESSION['totalques']=$totalques;
		$_SESSION['quizclass']=$class;
		$_SESSION['quizbranch']=$branch;
		$_SESSION['quizdivision']=$division;
		$_SESSION['quizlastdate']=$lastdate;
		$_SESSION['count']=0;
		header("Location: /QuizMaster/views/QuestionsPage.php");
	}


	else
	{
		echo '<script>alert("Please enter a Unique Quiz Name");
				window.location.href="/QuizMaster/views/CreateQuiz.php";</script>';
	}
>>>>>>> Store Result changes
?>