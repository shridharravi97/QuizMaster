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

	$sql="SELECT id from questionindex where quizname='".$_SESSION['quizname']."'";
	$result=mysqli_query($con,$sql);
	if(!$result)
			die("Query Failed: ".mysqli_error($con));

	else
	{
		if(mysqli_num_rows($result)>0)
		{
			$res=mysqli_fetch_array($result);
			$quizid=$res[0];
		}
	}

	$quizname=$_SESSION['quizname'];
	$quesno=$_SESSION['count']+1;
	$question=$_POST['question'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$answer=$_POST['answer'];

	$query="INSERT INTO questions(id,quizname,quesno,question,optA,optB,optC,optD,answer) values ('$quizid','$quizname','$quesno','$question','$optA','$optB','$optC','$optD','$answer')";

	if(mysqli_query($con,$query))
	{
		$_SESSION['count']=$_SESSION['count']+1;
		echo '<script>alert("1 Question Added Successfully!");
				window.location.href="/QuizMaster/views/QuestionsPage.php";
				</script>';
	}
	else
	{
		echo '<script>alert("Failed to Add the Question. Please try again!");
				window.location.href="/QuizMaster/views/QuestionsPage.php";
				</script>';
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

	$sql="SELECT id from questionindex where quizname='".$_SESSION['quizname']."'";
	$result=mysqli_query($con,$sql);
	if(!$result)
			die("Query Failed: ".mysqli_error($con));

	else
	{
		if(mysqli_num_rows($result)>0)
		{
			$res=mysqli_fetch_array($result);
			$quizid=$res[0];
		}
	}

	$quizname=$_SESSION['quizname'];
	$quesno=$_SESSION['count']+1;
	$question=$_POST['question'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$answer=$_POST['answer'];

	$query="INSERT INTO questions(id,quizname,quesno,question,optA,optB,optC,optD,answer) values ('$quizid','$quizname','$quesno','$question','$optA','$optB','$optC','$optD','$answer')";

	if(mysqli_query($con,$query))
	{
		$_SESSION['count']=$_SESSION['count']+1;
		echo '<script>alert("1 Question Added Successfully!");
				window.location.href="/QuizMaster/views/QuestionsPage.php";
				</script>';
	}
	else
	{
		echo '<script>alert("Failed to Add the Question. Please try again!");
				window.location.href="/QuizMaster/views/QuestionsPage.php";
				</script>';
	}
>>>>>>> Store Result changes
?>