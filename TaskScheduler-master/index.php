<!doctype html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/untitled.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="CSS/main.css">
    <script src="library/jquery-3.2.1.min.js"></script>
    <script src="library/bootstrap.min.js"></script>
    <script type="text/javascript" src="Library/jquery.min.js"></script>

    <!-- Code to combine firstname and lastname for the username -->
    <script langugae="javascript">
     function doCombine()
     {
         document.getElementById('user_name').value = document.getElementById('first_name').value + "." +
         document.getElementById('last_name').value;
     }
    </script>

    <!-- Code to validate the add new user field -->
    <script>
              function IsEmptyUser(){
            if(document.forms['myUserForm'].first_name.value === "")
            {
              alert("empty first name!");
              return false;
            }
            else if(document.forms['myUserForm'].last_name.value === ""){
              alert("empty last name!");
              return false;
            }
            else if(document.forms['myUserForm'].user_name.value === ""){
              alert("empty username!");
              return false;
            }
            else if(document.forms['myUserForm'].email.value === ""){
              alert("empty email!");
              return false;
            }
            else {
              return true;
              }
          }
    </script>

    <!-- Code to validate the add new task field -->
    <script>
              function IsEmptyTask(){
            if(document.forms['myTaskForm'].task_name.value === "")
            {
              alert("empty task name!");
              return false;
            }
            else if(document.forms['myTaskForm'].task_description.value === ""){
              alert("empty task description!");
              return false;
            }
            else if(document.forms['myTaskForm'].task_recursion.value === ""){
              alert("empty type of task");
              return false;
            }
            else if(document.forms['myTaskForm'].day.value === ""){
              alert("empty day!");
              return false;
            }
            else if(document.forms['myTaskForm'].dtime_start.value === ""){
              alert("empty time start!");
              return false;
            }
            else if(document.forms['myTaskForm'].dtime_end.value === ""){
              alert("empty time end!");
              return false;
            }
            else if(document.forms['myTaskForm'].dtask_duration.value === ""){
              alert("empty task task duration!");
              return false;
            }
            else if(document.forms['myTaskForm'].task_day.value === ""){
              alert("empty day!");
              return false;
            }
            else if(document.forms['myTaskForm'].wtime_start.value === ""){
              alert("empty time start!");
              return false;
            }
            else if(document.forms['myTaskForm'].wtime_end.value === ""){
              alert("empty time end!");
              return false;
            }
            else if(document.forms['myTaskForm'].wtask_duration.value === ""){
              alert("empty task task duration!");
              return false;
            }
            else if(document.forms['myTaskForm'].date_ofthe_month.value === ""){
              alert("empty date of the month!");
              return false;
            }
            else if(document.forms['myTaskForm'].mtime_start.value === ""){
              alert("empty time start!");
              return false;
            }
            else if(document.forms['myTaskForm'].mtime_end.value === ""){
              alert("empty time end!");
              return false;
            }
            else if(document.forms['myTaskForm'].mtask_duration.value === ""){
              alert("empty task task duration!");
              return false;
            }
            else if(document.forms['myTaskForm'].start_datetime.value === ""){
              alert("empty date and time start!");
              return false;
            }
            else if(document.forms['myTaskForm'].end_datetime.value === ""){
              alert("empty date and time end!");
              return false;
            }
            else if(document.forms['myTaskForm'].task_duration.value === ""){
              alert("empty task duration!");
              return false;
            }
            else {
              return true;
              }
          }
    </script>

    <!--script to display related field of the chosen recursion of task-->
    <script type="text/javascript">
          $(document).ready(function(){
        $('#task_recursion').on('change', function() {

          if ( this.value == 'daily')
          //.....................^.......
          {
               $("#week_task").hide();
               $("#mon_task").hide();
               $("#cus_task").hide();
            $("#day_task").show();
          }
          else if ( this.value == 'weekly')
          //.....................^.......
          {
               $("#day_task").hide();
               $("#mon_task").hide();
               $("#cus_task").hide();
            $("#week_task").show();
          }
          else if ( this.value == 'monthly')
          //.....................^.......
          {
               $("#day_task").hide();
               $("#week_task").hide();
               $("#cus_task").hide();
            $("#mon_task").show();
          }
          else  if ( this.value == 'customize')
          {
              $("#day_task").hide();
              $("#week_task").hide();
              $("#mon_task").hide();
            $("#cus_task").show();
          }
           else
          {
              $("#day_task").hide();
              $("#week_task").hide();
              $("#mon_task").hide();
              $("#cus_task").hide();
          }
        });
    });
    </script>

    <script type="text/javascript">
          $(document).ready(function(){
        $('#task_status').on('change', function() {

          if ( this.value == 'assigned')
          //.....................^.......
          {;
            $("#assign").show();
          }

          if ( this.value == 'unassigned')
          //.....................^.......
          {;
            $("#assign").hide();
          }

        });
    });
    </script>

    <!-- table display style -->
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
            background-color: #4CAF50;
            color: white;
        }
        </style>
  </head>

  <body data-spy="scroll" data-target="#myscrollSpy" data-offset="15">
    <div style="position:absolute; top:5em; left:5em;">
          <img src="PNG/logo.png" alt="workhub_logo" width="270px"; height="150px;">
    </div>
    <div class="sidenav">
      <table class="a">
          <tr>
            <!--<th class="icon" rowspan="2"><i class="fa fa-user-circle-o" aria-hidden="true"></i></th>-->
            <td class="username">John Doe</td>
          </tr>
          <tr>
            <td class="role">Administrator</td>
          </tr>
      </table>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:300px;">Add New User</button>
    <br/>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:300px;">Add New Task</button>
      <div class="reports">
        <h2><i class="fa fa-thumb-tack" aria-hidden="true"></i> Reports</h2>
          <a href="#"><h4><i class="fa fa-angle-down" aria-hidden="true"></i> View Reports</h4></a>
      </div>
      <div class="calendar">
       <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;height=250&amp;wkst=1&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=en.philippines%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FManila" style="border-width:0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
      </div>
    </div> <!-- end of sidenav -->
    <!-- display clock -->
    <div class="right-clock" style="position:absolute; top:0; right:0;">
        <table class="b">
            <tr>
              <!--<th style="text-align: center; font-weight: bold"></th>-->
              <th style="text-align: center;"><canvas id="canvas_tt59a5254ca0619" width="150" height="150"></canvas></th>
              <th style="text-align: center;"><canvas id="canvas_tt59a5261733768" width="150" height="150"></canvas></th>
              <th style="text-align: center;"><canvas id="canvas_tt59a52c567e76b" width="150" height="150"></canvas></th>
            </tr>
            <tr>
              <!--<th style="text-align: center; font-weight: bold"><input type=button value="refresh"><a href="index.html"></a></input></th>-->
              <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/current_local/costa_rica_time.php" style="text-decoration: none" class="clock24" id="tz24-1503995212-cc11842-eyJzaXplIjoiMTUwIiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTlhNTI1NGNhMDYxOSJ9" title="Time in Costa Rica" target="_blank" rel="nofollow">Costa Rica</a></th>
              <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/usa_time/ok_mcclain/washington.htm" style="text-decoration: none" class="clock24" id="tz24-1503995415-cu126382-eyJzaXplIjoiMTUwIiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTlhNTI2MTczMzc2OCJ9" title="Time in Washington" target="_blank" rel="nofollow">United States</a></th>
              <th style="text-align: center; font-weight: bold"><a href="//24timezones.com/current_local/philippines_time.php" style="text-decoration: none" class="clock24" id="tz24-1503997014-cc14848-eyJzaXplIjoiMTUwIiwiYmdjb2xvciI6IjAwMDAwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NTlhNTJjNTY3ZTc2YiJ9" title="Time in Philippines" target="_blank" rel="nofollow">Philippines</a></th>
            </tr>
            <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
            <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
            <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
        </table>
       </div>
       <!-- code to add new user -->
       <div id="id01" class="modal">
       <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
       <form class="modal-content animate" method="post" action="" name="myUserForm" id="myUserForm">
         <div class="modal-header">
           <h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"></i> Add New User</h4>
         </div>
         <div class="container">
           <fieldset>
             <label for="fname">First Name: </label>
             <input type="text" id="first_name" name="first_name" value="">
             <label for="lname">Last Name: </label>
             <input type="text" id="last_name" name="last_name"  onchange="doCombine();"  value="">
             <label for="uname">Username: </label>
             <input type="text" id="user_name" name="user_name" placeholder="firstname.lastname" value="">
             <label for="email">Email:</label>
             <input type="email" name="email" placeholder="user@domain.com" value="">
             <label>Role: </label>
             <select class="input" name="account_type" value="">
                 <option value="user">User</option>
                 <option value="admin">Admin</option>
             </select>
           <label for="user_team">Team:</label>
           <select class="input" name="team" value="">
               <option value="techsupport">Technical Support</option>
               <option value="platformops">Platform Ops</option>
           </select>
           </fieldset>
             <div class="clearfix">
               <button class="register_button" type="submit" name="submituser" value="submit" style="width:300px;" onclick="return IsEmptyUser();">Add User</button>
               <br/>
               <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="width:300px;">Cancel</button>
             </div>
           </div>
       </form>
       <!-- code to add new user connected to databaseconn -->
       <?php include 'databaseconn.php'; ?>
       <?php
       if(isset($_POST['submituser']))
       {
       // create a variable
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $user_name = $_POST['user_name'];
       $email = $_POST['email'];
       $account_type = $_POST['account_type'];
       $team = $_POST['team'];
       //Execute the query
       mysqli_query($connect, "INSERT INTO user (first_name,last_name,user_name,email,account_type,team)
       				VALUES('$first_name','$last_name','$user_name','$email','$account_type','$team')");
               if(mysqli_affected_rows($connect) > 0){
               } else {
                 echo mysqli_error ($connect);
               }
       }
       ?>
       </div>

       <script>
       // Get the modal
       var modal = document.getElementById('id01');
       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
         if (event.target == modal) {
             modal.style.display = "none";
         }
       }
       </script>
       <!-- modal 2 -->

       <!-- code to add new task -->
       <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content animate" method="post" action="" name="myTaskForm" id="myTaskForm">
          <div class="modal-header">
            <h4 class="modal-title"><i class="fa fa-id-badge" aria-hidden="true"></i> Add New Task</h4>
          </div>
            <fieldset>
              <?php
              $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              $result = mysqli_query($connect,"SELECT MAX(task_id) FROM task GROUP BY task_id");
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                      $next = $row['MAX(task_id)'] + 1;
                  }
                  echo "<input value='". $next ."' type='hidden' name='task_id' id='task_id'>";
                  echo "</input>";
              }
              mysqli_close($connect);
              ?>
              <label for="name">Task Name: </label>
              <input type="text" name="task_name" value="">
              <label for="name">Task Description: </label>
              <input type="text" name="task_description" value="">
              <label for="name">Type of Task: </label>
              <select id="task_recursion" name="task_recursion">
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="customize">Customize</option>
              </select>

              <!--display fields for daily-->
              <div id="day_task" style='display:none;'>
                 <label for="name">Task Schedule: </label>
                 <span>
                 <input name="day[]" type="checkbox" value="Monday"/>Monday</input>
                 </span>
                 <span>
                 <input name="day[]" type="checkbox" value="Tuesday"/>Tuesday</input>
                 </span>
                 <span>
                 <input name="day[]" type="checkbox" value="Wednesday"/>Wednesday</input>
                 </sp
                 <span>
                 <input name="day[]" type="checkbox" value="Thursday"/>Thursday</input>
                 </span>
                 <span>
                 <input name="day[]" type="checkbox" value="Friday"/>Friday</input>
                 </span>
                 <span>
                 <input name="day[]" type="checkbox" value="Saturday"/>Saturday</input>
                 </span>
                 <span>
                 <input name="day[]" type="checkbox" value="Sunday"/>Sunday</input>
                 </span>
                 <!-- code to compute time for daily task-->
                 <div>
                   <p>Time In:</p>
                   <input id="dtime_start" name="dtime_start" type="time" onchange="daydurationdiff()">
                   <p>Time Out:</p>
                   <input id="dtime_end" name="dtime_end" type="time" onchange="daydurationdiff()">
                   <p>Total in Hour/s:</p>
                   <input id="dtask_duration" name="dtask_duration" style="background: rgba(255,255,255,0.1); border: none; font-size: 16px; height: auto; margin: 0; outline: 0; padding: 15px; width: 100%; background-color: #e8eeef; color: #8a97a0; box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset; margin-bottom: 30px;">

                   <script>
                         function daydurationdiff(){
                           var dtime_start = document.getElementById("dtime_start").value;
                           var dtime_end = document.getElementById("dtime_end").value;

                           function ddiff(dtime_start, dtime_end) {
                           dtime_start = dtime_start.split(":");
                           dtime_end = dtime_end.split(":");
                           var dstartDate = new Date(0, 0, 0, dtime_start[0], dtime_start[1], 0);
                           var dendDate = new Date(0, 0, 0, dtime_end[0], dtime_end[1], 0);
                           var ddiff = dendDate.getTime() - dstartDate.getTime();
                           var dhours = Math.floor(ddiff / 1000 / 60 / 60);
                           ddiff -= dhours * 1000 * 60 * 60;
                           var dminutes = Math.floor(ddiff / 1000 / 60);

                           return (dhours < 9 ? "0" : "") + dhours + ":" + (dminutes < 9 ? "0" : "") + dminutes;
                           }
                           document.getElementById("dtask_duration").value = ddiff(dtime_start, dtime_end);
                           }
                   </script>
                </div>
              </div>

              <!--display fields for weekly-->
              <div id="week_task" style='display:none;'>
                <label for="name">Task Schedule: </label>
                <span>
                <input name="task_day" type="radio" value="Monday"/>Monday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Tuesday"/>Tuesday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Wednesday"/>Wednesday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Thursday"/>Thursday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Friday"/>Friday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Saturday"/>Saturday</input>
                </span>
                <span>
                <input name="task_day" type="radio" value="Sunday"/>Sunday</input>
                </span>
                <!-- code to compute time for weekly task-->
                <div>
                  <p>Time In:</p>
                  <input id="wtime_start" name="wtime_start" type="time" onchange="weekdurationdiff()">
                  <p>Time Out:</p>
                  <input id="wtime_end" name="wtime_end" type="time" onchange="weekdurationdiff()">
                  <p>Total in Hour/s:</p>
                  <input id="wtask_duration" name="wtask_duration" style="background: rgba(255,255,255,0.1); border: none; font-size: 16px; height: auto; margin: 0; outline: 0; padding: 15px; width: 100%; background-color: #e8eeef; color: #8a97a0; box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset; margin-bottom: 30px;">

                  <script>
                        function weekdurationdiff(){
                          var wtime_start = document.getElementById("wtime_start").value;
                          var wtime_end = document.getElementById("wtime_end").value;

                          function wdiff(wtime_start, wtime_end) {
                          wtime_start = wtime_start.split(":");
                          wtime_end = wtime_end.split(":");
                          var wstartDate = new Date(0, 0, 0, wtime_start[0], wtime_start[1], 0);
                          var wendDate = new Date(0, 0, 0, wtime_end[0], wtime_end[1], 0);
                          var wdiff = wendDate.getTime() - wstartDate.getTime();
                          var whours = Math.floor(wdiff / 1000 / 60 / 60);
                          wdiff -= whours * 1000 * 60 * 60;
                          var wminutes = Math.floor(wdiff / 1000 / 60);

                          return (whours < 9 ? "0" : "") + whours + ":" + (wminutes < 9 ? "0" : "") + wminutes;
                          }
                          document.getElementById("wtask_duration").value = wdiff(wtime_start, wtime_end);
                          }
                  </script>
               </div>
              </div>

              <!--display fields for monthly-->
              <div id="mon_task" style='display:none;'>
                  <label for="name">Task Schedule: </label>
                  <div id="pickup_date"><p><input type="date" class="textbox" id="date_ofthe_month" name="date_ofthe_month" onchange="cal()"/></p></div>
                  <!-- code to compute time for monthly task-->
                  <div>
                    <p>Time In:</p>
                    <input id="mtime_start" name="mtime_start" type="time" onchange="monthdurationdiff()">
                    <p>Time Out:</p>
                    <input id="mtime_end" name="mtime_end" type="time" onchange="monthdurationdiff()">
                    <p>Total in Hour/s:</p>
                    <input id="mtask_duration" name="mtask_duration" style="background: rgba(255,255,255,0.1); border: none; font-size: 16px; height: auto; margin: 0; outline: 0; padding: 15px; width: 100%; background-color: #e8eeef; color: #8a97a0; box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset; margin-bottom: 30px;">

                    <script>
                          function monthdurationdiff(){
                            var mtime_start = document.getElementById("mtime_start").value;
                            var mtime_end = document.getElementById("mtime_end").value;

                            function mdiff(mtime_start, mtime_end) {
                            mtime_start = mtime_start.split(":");
                            mtime_end = mtime_end.split(":");
                            var mstartDate = new Date(0, 0, 0, mtime_start[0], mtime_start[1], 0);
                            var mendDate = new Date(0, 0, 0, mtime_end[0], mtime_end[1], 0);
                            var mdiff = mendDate.getTime() - mstartDate.getTime();
                            var mhours = Math.floor(mdiff / 1000 / 60 / 60);
                            mdiff -= mhours * 1000 * 60 * 60;
                            var mminutes = Math.floor(mdiff / 1000 / 60);

                            return (mhours < 9 ? "0" : "") + mhours + ":" + (mminutes < 9 ? "0" : "") + mminutes;
                            }
                            document.getElementById("mtask_duration").value = mdiff(mtime_start, mtime_end);
                            }
                    </script>
                 </div>
              </div>

              <!--display fields for customize task-->
              <div id="cus_task" style='display:none;'>
                  <label>From:</label><input id="start_datetime" type="datetime-local" name="start_datetime"/>
                  <label>To:</label><input id="end_datetime" type="datetime-local" name="end_datetime" onBlur="document.getElementById('task_duration').value = (new Date(this.value) - new Date(start_datetime.value))/(1000*60*60)"/>
                  <br><br/>
                 <label>Task Duration (in hours):</label>
                 <input id="task_duration" type="text" name="task_duration" onChange="changeDate()" />
               </div>

               <label for="name">Task Current Status: </label>
               <select class="input" id="task_status" name="task_status" value="">
                 <option value="unassigned">Unassigned</option>
                 <option value="assigned">Assigned</option>
               </select>

               <div id="assign" style='display:none;'>
              <!--//Assign To!!!-->
              <label for="name">Assign To: </label>
              <?php
              $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($connect,"SELECT user_id,user_name FROM user WHERE account_type='user'");

              echo "<select name='assign_to' id='assign_to'>";
              while($row = mysqli_fetch_array($result))
              {
                      echo "<option value='". $row['user_id'] ."'>" . $row['user_name'] . "</option>";
              }
              echo "</select>";
              mysqli_close($connect);
              ?>
            </div>
              <!--//Assign By!!!-->
              <label for="name">Assign By: </label>
              <?php
              $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($connect,"SELECT user_id,user_name FROM user WHERE account_type='admin'");
              echo "<select name='assign_by'>";
              while($row = mysqli_fetch_array($result))
              {
                    echo "<option value='". $row['user_id'] ."'>" . $row['user_name'] . "</option>";
              }
              echo "</select>";
              mysqli_close($connect);
              ?>

              <label for="name">Set Priority: </label>
              <select class="input" id="task_priority" name="task_priority" value="">
                <option value="high priority">High Priority</option>
                <option value="medium priority">Medium Priority</option>
                <option value="low priority">Low Priority</option>
              </select>

            </fieldset>
            <div class="clearfix">
              <button type="submit" name="submittask" class="signupbtn" style="width:300px;" onclick="return IsEmptyTask();">Add New Task</button>
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="width:300px;">Cancel</button>
            </div>
            <!-- code to add new task connected to databaseconn -->
            <?php include 'databaseconn.php'; ?>

            <?php
            if(isset($_POST['submittask']))
            {
            // table task variables
            $task_id = $_POST['task_id'];
            $task_name = $_POST['task_name'];
            $task_description = $_POST['task_description'];
            $task_recursion = $_POST['task_recursion'];
            $assign_to = $_POST['assign_to'];
            $assign_by = $_POST['assign_by'];
            $task_priority = $_POST['task_priority'];
            $task_status = $_POST['task_status'];

            //Execute the query
            mysqli_query($connect, "INSERT INTO task (task_name,task_description,task_recursion,assign_to,assign_by,task_priority,task_status)
            				VALUES('$task_name','$task_description','$task_recursion','$assign_to','$assign_by','$task_priority','$task_status')");

            if($task_recursion=='customize'){
            	$start_datetime = $_POST['start_datetime'];
            	$end_datetime = $_POST['end_datetime'];
            	$task_duration = $_POST['task_duration'];
            	mysqli_query($connect, "INSERT INTO customize_task (start_datetime,end_datetime,task_duration,task_id)
            					VALUES('$start_datetime','$end_datetime','$task_duration','$task_id')");
            }

            else if($task_recursion=='monthly'){
            	$date_ofthe_month = $_POST['date_ofthe_month'];
            	$mtime_start = $_POST['mtime_start'];
            	$mtime_end = $_POST['mtime_end'];
            	$mtask_duration = $_POST['mtask_duration'];
            	mysqli_query($connect, "INSERT INTO monthly_task (date_ofthe_month,mtime_start,mtime_end,mtask_duration,task_id)
            					VALUES('$date_ofthe_month','$mtime_start','$mtime_end','$mtask_duration','$task_id')");
            }

            else if($task_recursion=='weekly'){
            	$task_day = $_POST['task_day'];
            	$wtime_start = $_POST['wtime_start'];
            	$wtime_end = $_POST['wtime_end'];
            	$wtask_duration = $_POST['wtask_duration'];
            	mysqli_query($connect, "INSERT INTO weekly_task (task_day,wtime_start,wtime_end,wtask_duration,task_id)
            					VALUES('$task_day','$wtime_start','$wtime_end','$wtask_duration','$task_id')");
            }

            else if($task_recursion=='daily'){
            	$dtime_start = $_POST['dtime_start'];
            	$dtime_end = $_POST['dtime_end'];
            	$dtask_duration = $_POST['dtask_duration'];
            	$checkbox1=$_POST['day'];
            	$chk="";
            	foreach ((array)$checkbox1 as $chk1) {
            		$chk .= $chk1.",";
            	}
            	mysqli_query($connect, "INSERT INTO daily_task (day,dtime_start,dtime_end,dtask_duration)
            					VALUES('$chk','$dtime_start','$dtime_end','$dtask_duration','$task_id')");
            }

            				if(mysqli_affected_rows($connect) > 0){
                    } else {
                      echo mysqli_error ($connect);
                    }
            }
            ?>
          </div>
        </form>
       </div>

       <script>
       // Get the modal
       var modal = document.getElementById('id02');

       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
       }
       </script>

      <div class="main">
        <br></br>
        <br></br>
        <h3>List of Users</h3>
      <?php
      $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
      // Check connection
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      $result = mysqli_query($connect,"SELECT * FROM user");
      echo "<div id='divuserview'>";
      echo "<table class='table2'>
      <thead>
      <tr>
      <th>User ID</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Username</th>
      <th>Email</th>
      <th>Role</th>
      <th>Team</th>
      </tr>
      </thead>";


      while($row = mysqli_fetch_array($result))
      {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>" . $row['user_id'] . "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['user_name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['account_type'] . "</td>";
      echo "<td>" . $row['team'] . "</td>";
      echo "</tr>";
      }
      echo "</tbody>";
      echo "</a>";
      echo "</table>";
      echo "</div>";
      mysqli_close($connect);
      ?>
      </br></br>
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
        echo "<tr>";
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
  </body>
</html>
