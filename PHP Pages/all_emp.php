<html>
  <head>
    <title>
      JobEase - Online Job Portal
    </title>
    <link rel="stylesheet" type="text/css" href="template.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
  </head>
  <body>
    <nav>
      <div>
        <span>JobEase</span>
        <ul>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <div class="dashboard">
        <div class="sidemenu">
          <h1>ADMIN<br>DASHBOARD</h1><hr>
          <h3>Manage Employers</h3>
          <ul>
          <li><a href="">View All</a></li>
          <li><a href="">Add New Employer</a></li>
          <li><a href="">Modify Employer Details</a></li>
          </ul><hr>
          <h3>Manage JobSeekers</h3>
          <ul>
          <li><a href="">View All</a></li>
          <li><a href="">Add New JobSeeker</a></li>
          <li><a href="">Modify JobSeeker Details</a></li>
          </ul>
          <hr>
          <h3>Update Password</h3><hr>
        </div>
        <div class="c1">
          <?php
      $connection=mysqli_connect('localhost','root','root','job_ease');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }

  $sql = "SELECT * FROM `employer_reg`";
  $query_result=mysqli_query($connection, $sql);
  $count=mysqli_num_rows($query_result);
  
  if($count > 0)
  {
    echo"<table> <tr><th>Emp_id </th><th>Comp_name </th> <th>C_mail </th><th>c_pass </th><th>Head name</th><th>Mobile </th><th> Address </th><th>Pincode </th></tr>";
    while ($record=mysqli_fetch_array($query_result)) 
    {
      echo" <tr><td>",$record["EmployerId"],"</td><td>",
              $record["CompanyName"],"</td><td>",
              $record["Email"],"</td><td>",
              $record["Password"],"</td><td>",
              $record["ContactPerson"],"</td><td>",
              $record["Mobile"],"</td><td>",
              $record["Address"],"</td><td>",
              $record["Pincode"],"</td></tr>";
    }
    echo"</table>";
  }
  mysqli_close($connection)
?>
        </div>
      </div>
    </main>
    <footer>
      <div>
      <span class="address">
        <h3>JobEase FastForward Services</h3>

        Toll Free Number: 1800-102-5557 , 1800-572-5557<br>
        Work Timings: 9.30 AM to 6.30 PM<br>
        Working Days: Monday to Saturday<br>
        Email Id: service@jobease.com<br><br>

        International Clients: +91 120 4021100<br> 
        (9.30 AM to 6.00 PM IST)
      </span>
      <span class="jobseekers">
        <h3>Jobseekers</h3>

        <a>Register Now</a><br>
        <a>Search Jobs</a><br>
        <a>Login</a><br>
        <a>Create Job Alert</a><br>
        <a>Report a Problem</a><br>
      </span>
      <span class="browse">
        <h3>Browse Jobs</h3>

        Browse All Jobs<br>
        Jobs by Company<br>
        Jobs by Category<br>
        Jobs by Designation<br>
        Jobs by Location<br>
        Jobs by Skill<br>
      </span>
      <span class="employers">
        <h3>Employers</h3>

        Job Posting<br>
        Resume Database Access<br>
        Recruiter Login<br>
        Naukri RMS<br>
        Buy Resume Packages Online<br>
        Report a Problem<br>

        <h3>ADMIN LOGIN</h3>
      </span>
      <span class="follow">
        <h3>Follow Us</h3>
        <img src="facebook.png"><br>
        <img src="instagram.png"><br>
        <img src="linkedin.png"><br>
        <img src="twitter.png">
      </span>
      </div>
    </footer>
  </body>
 </html>