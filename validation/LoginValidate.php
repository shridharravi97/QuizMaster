<?php
	session_start();
	$server="localhost";
	$user="student";
	$pwd="";
	$db="Quizmaster";
	$username=$_POST["uname"];
	$p=$_POST["pword"];
	$pass=md5($p);
	
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	if($username!=' ' && $p!=' ')
	{
		$query="SELECT * from userdetail where username='".$username."' AND password='".$pass."'";
		$result=mysqli_query($con,$query);
		
		if(!$result)
			die("Query Failed: ".mysqli_error($con));
		
		else
		{
			if(mysqli_num_rows($result)>0)
			{
				$res=mysqli_fetch_array($result);
				$_SESSION['sess_user']=$res[1];
				$_SESSION['username']=$res[2];
				$_SESSION['user_id']=$res[0];
				$_SESSION['email']=$res[3];
				$_SESSION['phone']=$res[5];
				$_SESSION['class']=$res[6];
				$_SESSION['branch']=$res[9];
				$_SESSION['division']=$res[7];
				$_SESSION['roll']=$res[8];
				$_SESSION['role']=$user;
				
				echo '<script>alert("Login Successful! You are being redirected to the Home Page");
						window.location.href="/QuizMaster/views/HomePage.php";
						</script>';
			}
			else
			{
				echo '<script>alert("Incorrect Username or Password. Please Try Again!");
				window.location.href="/QuizMaster/views/LoginPage.html";
				</script>';
			}
		}
	}
?>