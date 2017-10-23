<<<<<<< HEAD
<?php 
	session_start();
	$server="localhost";
	$user="faculty";
	$pwd="";
	$db="QuizMaster";
	$empcode=$_SESSION['empcode'];
	$curr=$_POST["currpwd"];
	$new=$_POST["newpwd"];
	$renew=$_POST["renewpwd"];
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo '<script>alert("Connection failed");
				window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
				
	$sql="SELECT empcode,password from faculty where empcode='".$empcode."'";
	$result=mysqli_query($con,$sql);
	
	if(!$result)
		die("Query Failed: ".mysqli_error($con));
	else
	{
		if(mysqli_num_rows($result)>0)
		{
			$res=mysqli_fetch_array($result);
			$check=md5($curr);
			if($check!=$res[1])
				echo '<script>alert("Incorrect Current Password. Please Try Again");
						window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
			else
			{
				if($new!=$renew)
					echo '<script>alert("Entered New Password does not match with the other one. Please Try Again");
							window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
				else
				{
					$pass=md5($new);
					$query="UPDATE faculty SET password='".$pass."' where empcode='".$empcode."'";
					$update=mysqli_query($con,$query);
					if(!$update)
						die("Update failed: ".mysqli_error($con));
					else
					{
						echo '<script>alert("Password Changed Successfully!");
								window.location.href="/QuizMaster/views/UserProfile.php";</script>';
					}
				}
			}
		}
	}
=======
<?php 
	session_start();
	$server="localhost";
	$user="faculty";
	$pwd="";
	$db="QuizMaster";
	$empcode=$_SESSION['empcode'];
	$curr=$_POST["currpwd"];
	$new=$_POST["newpwd"];
	$renew=$_POST["renewpwd"];
	$con=mysqli_connect("$server","$user","$pwd","$db");
	if(!$con)
		echo '<script>alert("Connection failed");
				window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
				
	$sql="SELECT empcode,password from faculty where empcode='".$empcode."'";
	$result=mysqli_query($con,$sql);
	
	if(!$result)
		die("Query Failed: ".mysqli_error($con));
	else
	{
		if(mysqli_num_rows($result)>0)
		{
			$res=mysqli_fetch_array($result);
			$check=md5($curr);
			if($check!=$res[1])
				echo '<script>alert("Incorrect Current Password. Please Try Again");
						window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
			else
			{
				if($new!=$renew)
					echo '<script>alert("Entered New Password does not match with the other one. Please Try Again");
							window.location.href="/QuizMaster/views/FacultyChangePassword.php";</script>';
				else
				{
					$pass=md5($new);
					$query="UPDATE faculty SET password='".$pass."' where empcode='".$empcode."'";
					$update=mysqli_query($con,$query);
					if(!$update)
						die("Update failed: ".mysqli_error($con));
					else
					{
						echo '<script>alert("Password Changed Successfully!");
								window.location.href="/QuizMaster/views/UserProfile.php";</script>';
					}
				}
			}
		}
	}
>>>>>>> Store Result changes
?>