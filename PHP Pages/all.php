<?php
                  $connection=mysqli_connect('localhost','root','root','job_ease');
                  if(!$connection)
                  {
                    die("Couldn't connect to server");
                  }

              $sql = "SELECT * FROM `jobseeker_reg`";
              $query_result=mysqli_query($connection, $sql);
              $count=mysqli_num_rows($query_result);
              
              if($count > 0)
              {
                echo"<table> <tr><th>J_Id </th><th>Name </th><th> Address </th><th> City </th><th>Email </th><th>Mobile </th><th> Qualification </th><th> Gender </th><th>Password </th></tr>";
                while ($record=mysqli_fetch_array($query_result)) 
                {
                  echo" <tr><td>",$record["JobSeekId"],"</td><td>",
                          $record["JobSeekerName"],"</td><td>",
                          $record["Address"],"</td><td>",
                          $record["City"],"</td><td>",
                          $record["Email"],"</td><td>",
                          $record["Mobile"],"</td><td>",
                          $record["Qualification"],"</td><td>",
                          $record["Gender"],"</td><td>",
                          $record["Password"],"</td></tr>",;
                }
                echo"</table>";
              }
              mysqli_close($connection)
            ?>