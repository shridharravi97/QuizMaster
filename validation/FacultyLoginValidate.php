<?php
	session_start();
	$server="localhost";
	$user="faculty";
	$pwd="";
	$db="Quizmaster";
	$empcode=$_POST["empcode"];
	$p=$_POST["pword"];
	$pass=md5($p);
	
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	if($username!=' ' && $p!=' ')
	{
		$query="SELECT * from faculty where empcode='".$empcode."' AND password='".$pass."'";
		$result=mysqli_query($con,$query);
		if(!$result)
			die("Query Failed: ".mysqli_error($con));
		else
		{
			if(mysqli_num_rows($result)>0)
			{
				$res=mysqli_fetch_array($result);
				$_SESSION['role']=$user;
				$_SESSION['empcode']=$empcode;
				$_SESSION['sess_user']=$res[1];
				echo '<script>alert("Login Successful! You are being redirected to the Home Page");
						window.location.href="/QuizMaster/views/HomePage.php";
						</script>';
			}
			else
			{
				echo '<script>alert("Incorrect Username or Password. Please Try Again!");
				window.location.href="/QuizMaster/views/FacultyLogin.html";
				</script>';
			}
		}
	}
?>