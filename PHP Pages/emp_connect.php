<?php
      $connection=mysqli_connect('localhost','root','root','job_ease');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }
	echo "Connected Successfully";
	  $name = $_REQUEST["cname"];
      $mail = $_REQUEST["id"];
      $psw = $_REQUEST["pss"];
      $contact = $_REQUEST["cpname"];
      $mobile =$_REQUEST["phone"];
      $add = $_REQUEST["address"];
      $pin = $_REQUEST["pcode"];
      
	
	echo $name," ",$mail," ";
	
	$sql = "INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `Email`, `Password`, `ContactPerson`, `Mobile`, `Address`, `Pincode`) VALUES (NULL, '$name', '$mail', '$psw', '$contact', '$mobile', '$add', '$pin')";

	if(!mysqli_query($connection,$sql))
	{
		echo "Record Not Inserted";
	}
	else{echo "Record Inserted";}
	
?>