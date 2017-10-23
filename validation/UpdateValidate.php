<<<<<<< HEAD
<?php
	session_start();
	$server="localhost";
	$user="student";
	$pwd="";
	$db="QuizMaster";
	$username=$_SESSION['username'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$division=$_POST['division'];
	$con=mysqli_connect("$server","$user","$pwd","$db");
	
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	#echo '<script>var pass=prompt("'.$_SESSION['sess_user'].', Please Enter Password to continue:");</script>';
	
	#$pass=$_POST['pass'];
	#$p=md5($pass);
	
	$query="SELECT * from userdetail where username='".$username."'";
	$result=mysqli_query($con,$query);
	if(!$result)
		die("Query Failed: ".mysqli_error($con));
		
	else
	{
		$upd="UPDATE userdetail SET name='".$name."', phone='".$phone."', class='".$class."', branch='".$branch."', division='".$division."' where username='".$username."'";
		$update=mysqli_query($con,$upd);
		if(!$update)
			die("Update failed: ".mysqli_error($con));
		else
		{
			$_SESSION['sess_user']=$name;
			$_SESSION['phone']=$phone;
			$_SESSION['class']=$class;
			$_SESSION['branch']=$branch;
			$_SESSION['division']=$division;
			echo '<script>alert("Update successful!");
					window.location.href="/QuizMaster/views/Userprofile.php";
					</script>';
		}
	}
?>
=======
<?php
	session_start();
	$server="localhost";
	$user="student";
	$pwd="";
	$db="QuizMaster";
	$username=$_SESSION['username'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$class=$_POST['class'];
	$branch=$_POST['branch'];
	$division=$_POST['division'];
	$con=mysqli_connect("$server","$user","$pwd","$db");
	
	if(!$con)
		echo "<script>alert('Connection failed');</script>";
	
	#echo '<script>var pass=prompt("'.$_SESSION['sess_user'].', Please Enter Password to continue:");</script>';
	
	#$pass=$_POST['pass'];
	#$p=md5($pass);
	
	$query="SELECT * from userdetail where username='".$username."'";
	$result=mysqli_query($con,$query);
	if(!$result)
		die("Query Failed: ".mysqli_error($con));
		
	else
	{
		$upd="UPDATE userdetail SET name='".$name."', phone='".$phone."', class='".$class."', branch='".$branch."', division='".$division."' where username='".$username."'";
		$update=mysqli_query($con,$upd);
		if(!$update)
			die("Update failed: ".mysqli_error($con));
		else
		{
			$_SESSION['sess_user']=$name;
			$_SESSION['phone']=$phone;
			$_SESSION['class']=$class;
			$_SESSION['branch']=$branch;
			$_SESSION['division']=$division;
			echo '<script>alert("Update successful!");
					window.location.href="/QuizMaster/views/Userprofile.php";
					</script>';
		}
	}
?>
>>>>>>> Store Result changes
	