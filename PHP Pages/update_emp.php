
<?php
      $connection=mysqli_connect('localhost','root','root','job_ease');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }
	echo "Connected Successfully";

$get_record = (mysqli_query($connection,"select * from employee_reg where EmployeeId=100")

$count=mysqli_num_rows($get_record);

if($count>0)
	{
	$sql_query="update employee_reg set emp_name='Rakesh' where EmployeeId=100";

	mysqli_query($connection,$sql_query);
	echo"Record updated Successfully";
	}
	else{
	echo"Record not found";
	}
	mysqli_close($connection)
	?>