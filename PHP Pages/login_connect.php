<?php
 $connection=mysqli_connect('localhost','root','root','job_ease');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }
	echo "Connected Successfully";
// Initialize the session
session_start();

$error=''; // Variable To Store Error Message

	// Define $username and $password
	
	$type=$_REQUEST["type"];


	if($type==="JobSeeker")
	{
		$sql_query = "SELECT * FROM `jobseeker_reg` WHERE `Email` = '" . $_REQUEST["username"] . "' AND `Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: jseeker_zone.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	if($type==="Employer")
	{
		$sql_query = "SELECT * FROM `employer_reg` WHERE `Email` = '" . $_REQUEST["username"] . "' AND `Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: emp_zone.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	if($type==="Administrator")
	{
		$sql_query = "SELECT * FROM `user_master` WHERE `UserName` = '" . $_REQUEST["username"] . "' AND `Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: admin.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	

?>