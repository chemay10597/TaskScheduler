<!doctype html>
<html ng-app>
<head>
  <head>
    <title>User Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/new-user.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Library/angular.min.js"></script>
    <script src="Library/jquery-3.2.1.min.js"></script>
    <script src="Library/bootstrap.min.js"></script>
  </head>
</head>

<body>
    <div class="h-logo">
        <img src="PNG/logo.png" alt="workhublogo">
        <div class="right-clock">
              <table class="b">
                  <tr>
                    <th style="text-align: center;"><canvas id="canvas_tt59cc9c0ec51c0" width="125" height="125"></canvas></th>
                    <th style="text-align: center;"><canvas id="canvas_tt59cc9e5127c65" width="125" height="125"></canvas></th>
                    <th style="text-align: center;"><canvas id="canvas_tt59cca060888e3" width="125" height="125"></canvas></th>
                  </tr>
                  <tr>
                    <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/current_local/philippines_time.php" style="text-decoration: none" class="clock24" id="tz24-1506581518-cc14848-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTljYzljMGVjNTFjMCJ9" title="Time in Philippines" target="_blank">Philippines </a></th>
                    <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/world_directory/current_san_jose_cr_time.php" style="text-decoration: none" class="clock24" id="tz24-1506582097-c1225-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTljYzllNTEyN2M2NSJ9" title="Time in San Jose" target="_blank">Costa Rica</a></th>
                    <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/world_directory/current_washington_time.php" style="text-decoration: none" class="clock24" id="tz24-1506582624-c1263-eyJzaXplIjoiMTI1IiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTljY2EwNjA4ODhlMyJ9" title="Time in Washington" target="_blank">United States</a></th>
                  </tr>
                  <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
              </table>
           </div>
        </div>
        <br/>
    <div class="nav">
          <ul>
            <li class="task"><input type="checkbox" id=""> <label>Daily</label></li>
            <li class="task"><input type="checkbox" id=""> <label>Weekly</label></li>
            <li class="task"><input type="checkbox" id=""> <label>Monthly</label></li>
            <li><a href="#alerts">Alerts <span class="badge">5</span></a></li>
            <li><a href="#calendar">Calendar</a></li>
            <!--<li style="float:right"><a class="active" href="#user">-->
              <?php
              /*$connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              $result = mysqli_query($connect,"SELECT last_name,first_name,team FROM user WHERE user_id='3'");
              echo "<table>";
              while($row = mysqli_fetch_array($result))
              {
              echo "<tr>";
              echo "<td>" . $row['last_name'] . "</td>";
              echo "<td>" . ',' . "</td>";
              echo "<td>" . $row['first_name'] . "</td>";
              echo "<td>" . '-' . "</td>";
              echo "<td>" . $row['team'] . "</td>";
              echo "</tr>";
              }
              echo "</table>";
              mysqli_close($connect);*/
              ?>
            <!--<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>-->
          </ul>
    </div>
    <div class="container">
      <h2>Tasks</h2>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="typetask">
      <form method="post" action="">
      <?php
      $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
      // Check connection
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      $result = mysqli_query($connect,"SELECT * FROM task WHERE assign_to='3'");
      echo "<div id='divuserview'>";
      echo "<table class='table'>
      <thead>
      <tr>
      <th>Task ID</th>
      <th>Task Name</th>
      <th>Task Description</th>
      <th>Task Recursion</th>
      <th>Assign By</th>
      <th>Level of Priority</th>
      <th>Task Status</th>
      </tr>
      </thead>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>";
      echo "<input value='". $row['task_id'] ."' type='hidden' name='task_id' id='task_id'>";
      echo "</input>";
      echo "</td>";
      echo "<td>" . $row['task_name'] . "</td>";
      echo "<td>" . $row['task_description'] . "</td>";
      echo "<td>" . $row['task_recursion'] . "</td>";
      echo "<td>" . $row['assign_by'] . "</td>";
      echo "<td>" . $row['task_priority'] . "</td>";
      echo "<td>" . $row['task_status'] . "</td>";
      echo "<td>";
      echo "<select name='task_status' id='task_status' value=''>";
      echo "<option value=''>" . 'Status..' . "</option>";
      echo "<option value='finished'>" . 'Finished' . "</option>";
      echo "<option value='terminated'>" . 'Terminated' . "</option>";
      echo "<option value='expired'>" . 'Expired' . "</option>";
      echo "<option value='forwarded'>" . 'Forwarded' . "</option>";
      echo "<option value='failed'>" . 'Failed' . "</option>";
      echo "</select>";
      echo "</td>";
      echo "<td>";
      echo "<input type='submit' name='submitupdate' value='update status'>";
      echo "</input>";
      echo "</td>";
      echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      echo "</div>";
      mysqli_close($connect);
      ?>
    </form>
    </div>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "trax_task_scheduler_db";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      if(isset($_POST['submitupdate']))
       {
       // create a variable
       $task_id = $_POST['task_id'];
       $task_status = $_POST['task_status'];
       //$task_id = mysqli_real_escape_string($_POST['task_id']);
       //$task_status = mysqli_real_escape_string($_POST['task_status']);

      $sql = "UPDATE task SET task_status = '$task_status'  WHERE task_id='$task_id' LIMIT 1 ";

      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      }

      $conn->close();
      ?>
  </body>
</html>
