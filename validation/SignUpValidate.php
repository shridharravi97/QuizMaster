<<<<<<< HEAD
<?php
	$server="localhost";
	$admin="root";
	$pwd="";
	$name=$_POST["name"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$password=md5($pass);
	$phone=$_POST["phone"];
	$class=$_POST["class"];
	$branch=$_POST["branch"];
	$division=$_POST["division"];
	$roll=$_POST["roll"];
	$db="quizmaster";
	$con=mysqli_connect("$server","$admin","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	$sql="INSERT INTO userdetail(name,username,email,password,phone,class,division,roll,branch) VALUES ('$name','$username','$email','$password','$phone','$class','$division','$roll','$branch')";
	
	if(mysqli_query($con,$sql))
	{
		header("Location: /QuizMaster/views/SignUpSuccessful.html");
		exit();
	}
	else
	{
		echo '<script>var x=confirm("There is some error in the form. Please enter a UNIQUE Username, Email and Roll Number.Do You Want to Try Again?");
				if(x==true)
					window.location.href="/QuizMaster/views/SignUpPage.html";
			 </script>';
	}

=======
<?php
	$server="localhost";
	$admin="root";
	$pwd="";
	$name=$_POST["name"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$password=md5($pass);
	$phone=$_POST["phone"];
	$class=$_POST["class"];
	$branch=$_POST["branch"];
	$division=$_POST["division"];
	$roll=$_POST["roll"];
	$db="quizmaster";
	$con=mysqli_connect("$server","$admin","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	$sql="INSERT INTO userdetail(name,username,email,password,phone,class,division,roll,branch) VALUES ('$name','$username','$email','$password','$phone','$class','$division','$roll','$branch')";
	
	if(mysqli_query($con,$sql))
	{
		header("Location: /QuizMaster/views/SignUpSuccessful.html");
		exit();
	}
	else
	{
		echo '<script>var x=confirm("There is some error in the form. Please enter a UNIQUE Username, Email and Roll Number.Do You Want to Try Again?");
				if(x==true)
					window.location.href="/QuizMaster/views/SignUpPage.html";
			 </script>';
	}

>>>>>>> Store Result changes
?>