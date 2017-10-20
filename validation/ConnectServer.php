<?php
	$server="localhost";
	$user="root";
	$pwd="";
	$db="QuizMaster";
	$con=mysqli_connect("$server","$user","$pwd","$db");
	/*if(!$con)
	{
		die ("Connection Failed".mysqli_connect.error()."<br/>");
	}
	else
	{
		echo "Successful Connection"."<br/>";
	}
	
	
	$sql="CREATE DATABASE QuizMaster";
	if(mysqli_query($con,$sql))
	{
        echo "Database created"."<br/>";
    }
    else
    {
        echo "Database creation failed"."<br/>";
    }	
	
	
	$sql="CREATE TABLE UserDetail(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(30) NOT NULL,
			username VARCHAR(30) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL,
			phone VARCHAR(15) NOT NULL,
			class VARCHAR(5) NOT NULL,
			division VARCHAR(5) NOT NULL,
			roll VARCHAR(10) NOT NULL,
			branch VARCHAR(10) NOT NULL)";
	if(mysqli_query($con,$sql))
    {
        echo "User detail Table Created";
    }
    else
    {
        echo "User detail Table creation failed";
    }
	
	$sql="CREATE TABLE QuestionIndex(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			totalques INT(3) UNSIGNED,
			empcode INT(8) UNSIGNED NOT NULL,
			class varchar(10) NOT NULL,
			branch varchar(10) NOT NULL,
			division varchar(10) NOT NULL,
			quizname varchar(50) NOT NULL,
			qdate date NOT NULL,
			lastdate date NOT NULL)";
			
	if(mysqli_query($con,$sql))
		echo "QuestionIndex Table Created";
	else
		echo" QuestionIndex Table Creation Failed";			
	
	$sql="CREATE TABLE questions(id INT(6) UNSIGNED,
			quizname varchar(50) NOT NULL,
			quesno int(4) NOT NULL,
			question varchar(500) NOT NULL,
			optA varchar(50) NOT NULL,
			optB varchar(50) NOT NULL,
			optC varchar(50) NOT NULL,
			optD varchar(50) NOT NULL,
			answer varchar(10) NOT NULL)";

	if(mysqli_query($con,$sql))
		echo "Questions Table Created";
	else
		echo" Questions Table Creation Failed";	
	*/
?>