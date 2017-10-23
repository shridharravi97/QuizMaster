<?php
	session_start();
	if($_SESSION['role']=="student")
	{
		unset($_SESSION['sess_user']);
		unset($_SESSION['user_id']);
		unset($_SESSION['email']);
		unset($_SESSION['phone']);
		unset($_SESSION['class']);
		unset($_SESSION['branch']);
		unset($_SESSION['division']);
		unset($_SESSION['roll']);
		unset($_SESSION['role']);
		session_destroy();
		echo '<script>alert("Logout Successful! Please Log in again to continue");
			window.location.href="/QuizMaster/views/LoginPage.html";
			</script>';
	}
	else if($_SESSION['role']=="faculty")
	{
		unset($_SESSION['sess_user']);
		unset($_SESSION['empcode']);
		unset($_SESSION['role']);
		session_destroy();
		echo '<script>alert("Logout Successful! Please Log in again to continue");
			window.location.href="/QuizMaster/views/FacultyLogin.html";
			</script>';
	}
?>