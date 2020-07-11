<?php
      $connection=mysqli_connect('localhost','root','root','job_ease');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }
	echo "Connected Successfully";
	$name = $_REQUEST["fname"];
      $mobile = $_REQUEST["Phone"];
      $mail = $_REQUEST["email"];
      $Psw = $_REQUEST["Password"];

      $Gen =$_REQUEST["gender"];
      $Qual = $_REQUEST["Qualification"];
      $Add = $_REQUEST["Address"];
      $St = $_REQUEST["City"];
      
	
	echo $name," ",$mail," ";
	
	$sql = "INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `Password`) VALUES (NULL, '$name', '$Add', '$St', '$mail', '$mobile', '$Qual', '$Gen', '$Psw')";

	if(!mysqli_query($connection,$sql))
	{
		echo "Record Not Inserted";
	}
	else{echo "Record Inserted";}
	
?>