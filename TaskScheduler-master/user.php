<!doctype html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css"><!--
    <link rel="stylesheet" href="CSS/untitled.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">-->
    <!--<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="CSS/main.css">
    <script type="text/javascript" src="Library/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/new-user.css">
    <link rel="stylesheet" href="Library/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Library/angular.min.js"></script>
    <script src="Library/jquery-3.2.1.min.js"></script>
    <script src="Library/bootstrap.min.js"></script>
    <style>
      table.table2 {
          border-collapse: collapse;
          width: 100%;
      }

      table.table2 th, td {
          text-align: left;
          padding: 8px;
      }

      table.table2 tr:nth-child(even){background-color: #f2f2f2}

      table.table2 th {
          background-color: #808080;
          color: white;
      }
      </style>
</head>

<body>
  <div class="h-logo">
      <img src="PNG/logo1.png" alt="workhublogo">
      <img src="PNG/platformlogo.png" class="logo" alt="center">
    <div class="right-clock">
      <table class="a">
          <tr>
            <th class="name"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Asia%2FManila" width="90%" height="90" frameborder="0" seamless></iframe></th>
            <th class="name"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FCosta_Rica" width="90%" height="90" frameborder="0" seamless></iframe></th>
            <th class="name"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FPhoenix" width="90%" height="90" frameborder="0" seamless></iframe> </th>
          </tr>
          <tr>
              <th class="name">Philippines</th>
              <th class="name">Costa Rica</th>
              <th class="name">USA</th>
          </tr>
          </table>
    </div>
      <br/>
    <div class="navbar">
        <ul>
          <li class="task"><input type="checkbox" name="cod0"> <label>All Task</label></li>
          <li class="task"><input type="checkbox" name="cod1"> <label>Daily</label></li>
          <li class="task"><input type="checkbox" name="cod2"> <label>Weekly</label></li>
          <li class="task"><input type="checkbox" name="cod3"> <label>Monthly</label></li>
          <li class="task"><input type="checkbox" name="cod4"> <label>Customize</label></li>
          <li class="task"><input type="checkbox" name="cod5"> <label>Assigned</label></li>
          <li class="task"><input type="checkbox" name="cod6"> <label>Unassigned</label></li>
          <li class="task"><input type="checkbox" name="cod7"> <label>Done</label></li>
          <li class="task"><a href="#alerts">Reports <span class="badge">5</span></a></li>
          <li class="task"><a href="#calendar">Calendar</a></li>
        </ul>
  </div>
  </div>

  <div id="alltasktype">
  <h3>All Tasks</h3>
    <?php
    $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($connect,"SELECT * FROM task");
    echo "<div id='divuserview'>";
    echo "<table class='table2'>
    <thead>
    <tr>
    <th>Task Name</th>
    <th>Task Description</th>
    <th>Task Recursion</th>
    <th>Assign To</th>
    <th>Assign By</th>
    <th>Level of Priority</th>
    <th>Task Status</th>
    </tr>
    </thead>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tbody>";
    echo "<tr class='tdstyle'>";
    echo "<td>";
    echo "<input value='". $row['task_id'] ."' type='hidden' name='task_id' id='task_id'>";
    echo "</input>";
    echo "</td>";
    echo "<td>" . $row['task_name'] . "</td>";
    echo "<td>" . $row['task_description'] . "</td>";
    echo "<td>" . $row['task_recursion'] . "</td>";
    echo "<td>" . $row['assign_to'] . "</td>";
    echo "<td>" . $row['assign_by'] . "</td>";
    echo "<td>" . $row['task_priority'] . "</td>";
    echo "<td>" . $row['task_status'] . "</td>";
    echo "<td>";
    echo "<select name='task_status' id='task_status' value=''>";
    echo "<option value=''>" . 'Status..' . "</option>";
    echo "<option value='finished'>" . 'Finished' . "</option>";
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
  </div>

  <script>
  $('[name="cod0"]').on('change', function() {
  $('#alltasktype').toggle(this.checked);
  }).change();
  </script>

      <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "trax_task_scheduler_db");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      if(isset($_POST['submitupdate']))
       {
       // create a variable
       $task_id = $_POST['task_id'];
       $task_status = $_POST['task_status'];
      // Attempt update query execution
      $sql = "UPDATE task SET task_status='$task_status' WHERE task_id='$task_id'";
      if(mysqli_query($link, $sql)){
          echo "Records were updated successfully.";
      } else {
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
    }
      // Close connection
      mysqli_close($link);
      ?>

    <?php
      /*$servername = "localhost";
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

      $conn->close();*/
      ?>

      <div id="dailytype">
        <h3>Daily Tasks</h3>
          <?php
          $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
          // Check connection
          if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $result = mysqli_query($connect,"SELECT * FROM task JOIN daily_task WHERE task.task_recursion='daily'");
          echo "<div id='divuserview'>";
          echo "<table class='table2'>
          <thead>
          <tr>
          <th>Task Name</th>
          <th>Task Description</th>
          <th>Task Recursion</th>
          <th>Assign To</th>
          <th>Assign By</th>
          <th>Level of Priority</th>
          <th>Task Status</th>
          <th>Task Days</th>
          <th>Time Start</th>
          <th>Time End</th>
          <th>Task Duration</th>
          </tr>
          </thead>";

          while($row = mysqli_fetch_array($result))
          {
          echo "<tbody>";
          echo "<tr class='tdstyle'>";
          echo "<td>" . $row['task_name'] . "</td>";
          echo "<td>" . $row['task_description'] . "</td>";
          echo "<td>" . $row['task_recursion'] . "</td>";
          echo "<td>" . $row['assign_to'] . "</td>";
          echo "<td>" . $row['assign_by'] . "</td>";
          echo "<td>" . $row['task_priority'] . "</td>";
          echo "<td>" . $row['task_status'] . "</td>";
          echo "<td>" . $row['day'] . "</td>";
          echo "<td>" . $row['dtime_start'] . "</td>";
          echo "<td>" . $row['dtime_end'] . "</td>";
          echo "<td>" . $row['dtask_duration'] . "</td>";
          echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
          mysqli_close($connect);
          ?>
        </div>

        <script>
        $('[name="cod1"]').on('change', function() {
        $('#dailytype').toggle(this.checked);
        }).change();
        </script>

        <div id="weeklytype">
          <h3>Weekly Tasks</h3>
            <?php
            $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
            // Check connection
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($connect,"SELECT * FROM task JOIN weekly_task WHERE task.task_recursion='weekly'");
            echo "<div id='divuserview'>";
            echo "<table class='table2'>
            <thead>
            <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Task Recursion</th>
            <th>Assign To</th>
            <th>Assign By</th>
            <th>Level of Priority</th>
            <th>Task Status</th>
            <th>Task Day</th>
            <th>Time Start</th>
            <th>Time End</th>
            <th>Task Duration</th>
            </tr>
            </thead>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tbody>";
            echo "<tr class='tdstyle'>";
            echo "<td>" . $row['task_name'] . "</td>";
            echo "<td>" . $row['task_description'] . "</td>";
            echo "<td>" . $row['task_recursion'] . "</td>";
            echo "<td>" . $row['assign_to'] . "</td>";
            echo "<td>" . $row['assign_by'] . "</td>";
            echo "<td>" . $row['task_priority'] . "</td>";
            echo "<td>" . $row['task_status'] . "</td>";
            echo "<td>" . $row['task_day'] . "</td>";
            echo "<td>" . $row['wtime_start'] . "</td>";
            echo "<td>" . $row['wtime_end'] . "</td>";
            echo "<td>" . $row['wtask_duration'] . "</td>";
            echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            mysqli_close($connect);
            ?>
          </div>

          <script>
          $('[name="cod2"]').on('change', function() {
          $('#weeklytype').toggle(this.checked);
          }).change();
          </script>

          <div id="monthlytype">
            <h3>Monthly Tasks</h3>
              <?php
              $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($connect,"SELECT * FROM task JOIN monthly_task WHERE task.task_recursion='monthly'");
              echo "<div id='divuserview'>";
              echo "<table class='table2'>
              <thead>
              <tr>
              <th>Task Name</th>
              <th>Task Description</th>
              <th>Task Recursion</th>
              <th>Assign To</th>
              <th>Assign By</th>
              <th>Level of Priority</th>
              <th>Task Status</th>
              <th>Task Date</th>
              <th>Time Start</th>
              <th>Time End</th>
              <th>Task Duration</th>
              </tr>
              </thead>";

              while($row = mysqli_fetch_array($result))
              {
              echo "<tbody>";
              echo "<tr class='tdstyle'>";
              echo "<td>" . $row['task_name'] . "</td>";
              echo "<td>" . $row['task_description'] . "</td>";
              echo "<td>" . $row['task_recursion'] . "</td>";
              echo "<td>" . $row['assign_to'] . "</td>";
              echo "<td>" . $row['assign_by'] . "</td>";
              echo "<td>" . $row['task_priority'] . "</td>";
              echo "<td>" . $row['task_status'] . "</td>";
              echo "<td>" . $row['date_ofthe_month'] . "</td>";
              echo "<td>" . $row['mtime_start'] . "</td>";
              echo "<td>" . $row['mtime_end'] . "</td>";
              echo "<td>" . $row['mtask_duration'] . "</td>";
              echo "</tr>";
              }
              echo "</tbody>";
              echo "</table>";
              echo "</div>";
              mysqli_close($connect);
              ?>
            </div>

            <script>
            $('[name="cod3"]').on('change', function() {
            $('#monthlytype').toggle(this.checked);
            }).change();
            </script>

            <div id="customizetype">
              <h3>Customize Tasks</h3>
                <?php
                $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($connect,"SELECT * FROM task JOIN customize_task WHERE task.task_recursion='customize'");
                echo "<div id='divuserview'>";
                echo "<table class='table2'>
                <thead>
                <tr>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Task Recursion</th>
                <th>Assign To</th>
                <th>Assign By</th>
                <th>Level of Priority</th>
                <th>Task Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Task Duration</th>
                </tr>
                </thead>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tbody>";
                echo "<tr class='tdstyle'>";
                echo "<td>" . $row['task_name'] . "</td>";
                echo "<td>" . $row['task_description'] . "</td>";
                echo "<td>" . $row['task_recursion'] . "</td>";
                echo "<td>" . $row['assign_to'] . "</td>";
                echo "<td>" . $row['assign_by'] . "</td>";
                echo "<td>" . $row['task_priority'] . "</td>";
                echo "<td>" . $row['task_status'] . "</td>";
                echo "<td>" . $row['start_datetime'] . "</td>";
                echo "<td>" . $row['end_datetime'] . "</td>";
                echo "<td>" . $row['task_duration'] . "</td>";
                echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                mysqli_close($connect);
                ?>
              </div>

              <script>
              $('[name="cod4"]').on('change', function() {
              $('#customizetype').toggle(this.checked);
              }).change();
              </script>

              <div id="assignedtype">
                <h3>Assigned Tasks</h3>
                  <?php
                  $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
                  // Check connection
                  if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }

                  $result = mysqli_query($connect,"SELECT * FROM task WHERE task_status='assigned'");
                  echo "<div id='divuserview'>";
                  echo "<table class='table2'>
                  <thead>
                  <tr>
                  <th>Task Name</th>
                  <th>Task Description</th>
                  <th>Task Recursion</th>
                  <th>Assign To</th>
                  <th>Assign By</th>
                  <th>Level of Priority</th>
                  <th>Task Status</th>
                  </tr>
                  </thead>";

                  while($row = mysqli_fetch_array($result))
                  {
                  echo "<tbody>";
                  echo "<tr class='tdstyle'>";
                  echo "<td>" . $row['task_name'] . "</td>";
                  echo "<td>" . $row['task_description'] . "</td>";
                  echo "<td>" . $row['task_recursion'] . "</td>";
                  echo "<td>" . $row['assign_to'] . "</td>";
                  echo "<td>" . $row['assign_by'] . "</td>";
                  echo "<td>" . $row['task_priority'] . "</td>";
                  echo "<td>" . $row['task_status'] . "</td>";
                  echo "</tr>";
                  }
                  echo "</tbody>";
                  echo "</table>";
                  echo "</div>";
                  mysqli_close($connect);
                  ?>
                </div>

                <script>
                $('[name="cod5"]').on('change', function() {
                $('#assignedtype').toggle(this.checked);
                }).change();
                </script>

                <div id="unassignedtype">
                  <h3>Unassigned Tasks</h3>
                    <?php
                    $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($connect,"SELECT * FROM task WHERE task_status='unassigned'");
                    echo "<div id='divuserview'>";
                    echo "<table class='table2'>
                    <thead>
                    <tr>
                    <th>Task Name</th>
                    <th>Task Description</th>
                    <th>Task Recursion</th>
                    <th>Assign To</th>
                    <th>Assign By</th>
                    <th>Level of Priority</th>
                    <th>Task Status</th>
                    </tr>
                    </thead>";

                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tbody>";
                    echo "<tr class='tdstyle'>";
                    echo "<td>" . $row['task_name'] . "</td>";
                    echo "<td>" . $row['task_description'] . "</td>";
                    echo "<td>" . $row['task_recursion'] . "</td>";
                    echo "<td>" . $row['assign_to'] . "</td>";
                    echo "<td>" . $row['assign_by'] . "</td>";
                    echo "<td>" . $row['task_priority'] . "</td>";
                    echo "<td>" . $row['task_status'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    mysqli_close($connect);
                    ?>
                  </div>

                  <script>
                  $('[name="cod6"]').on('change', function() {
                  $('#unassignedtype').toggle(this.checked);
                  }).change();
                  </script>

                  <div id="donetype">
                    <h3>Done Tasks</h3>
                      <?php
                      $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
                      // Check connection
                      if (mysqli_connect_errno())
                      {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }

                      $result = mysqli_query($connect,"SELECT * FROM task WHERE task_status='finished'");
                      echo "<div id='divuserview'>";
                      echo "<table class='table2'>
                      <thead>
                      <tr>
                      <th>Task Name</th>
                      <th>Task Description</th>
                      <th>Task Recursion</th>
                      <th>Assign To</th>
                      <th>Assign By</th>
                      <th>Level of Priority</th>
                      <th>Task Status</th>
                      </tr>
                      </thead>";

                      while($row = mysqli_fetch_array($result))
                      {
                      echo "<tbody>";
                      echo "<tr class='tdstyle'>";
                      echo "<td>" . $row['task_name'] . "</td>";
                      echo "<td>" . $row['task_description'] . "</td>";
                      echo "<td>" . $row['task_recursion'] . "</td>";
                      echo "<td>" . $row['assign_to'] . "</td>";
                      echo "<td>" . $row['assign_by'] . "</td>";
                      echo "<td>" . $row['task_priority'] . "</td>";
                      echo "<td>" . $row['task_status'] . "</td>";
                      echo "</tr>";
                      }
                      echo "</tbody>";
                      echo "</table>";
                      echo "</div>";
                      mysqli_close($connect);
                      ?>
                    </div>

                    <script>
                    $('[name="cod7"]').on('change', function() {
                    $('#donetype').toggle(this.checked);
                    }).change();
                    </script>
  </body>
</html>
