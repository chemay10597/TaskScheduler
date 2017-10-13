<!doctype html>

<html ng-app>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add New Task</title>
      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="main.css">
      <script type="text/javascript" src="jquery.min.js"></script>

      <!--script to calculate time start and end for daily-->
      <script type="text/javascript">
          $(document).ready(function() {
       function calculateTime() {

           var  hourDiff = parseInt($("select[name='dtime_start']").val().split(':')[0],10) - parseInt($("select[name='dtime_end']").val().split(':')[0],10);
           $("p[name='x']").html("<b>Task Duration:</b> " + Math.abs(hourDiff) + " hr/s")
           document.getElementById("dtask_duration").value = Math.abs(hourDiff);
       }
       $("select").change(calculateTime);
       calculateTime();
       });
      </script>

      <!--script to calculate time start and end for weekly-->
      <script type="text/javascript">
          $(document).ready(function() {
       function calculateTime() {

           var  hourDiff = parseInt($("select[name='wtime_start']").val().split(':')[0],10) - parseInt($("select[name='wtime_end']").val().split(':')[0],10);
           $("p[name='y']").html("<b>Task Duration:</b> " + Math.abs(hourDiff) + " hr/s")
           document.getElementById("wtask_duration").value = Math.abs(hourDiff);
       }
       $("select").change(calculateTime);
       calculateTime();
       });
      </script>

      <!--script to calculate time start and end for monthly-->
      <script type="text/javascript">
          $(document).ready(function() {
       function calculateTime() {

           var  hourDiff = parseInt($("select[name='mtime_start']").val().split(':')[0],10) - parseInt($("select[name='mtime_end']").val().split(':')[0],10);
           $("p[name='z']").html("<b>Task Duration:</b> " + Math.abs(hourDiff) + " hr/s")
           document.getElementById("mtask_duration").value = Math.abs(hourDiff);
       }
       $("select").change(calculateTime);
       calculateTime();
       });
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

  </head>

  <body>
    <form method="post" action="pdatatask.php">
      <img src="logo.png" alt="tasksched_logo">
        <h1>Add New Task</h1>
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
           <div>
             <select name="dtime_start">
                <option value="00:00:00">12:00 am</option>
                <option value="01:00:00">1:00 am</option>
                <option value="02:00:00">2:00 am</option>
                <option value="03:00:00">3:00 am</option>
                <option value="04:00:00">4:00 am</option>
                <option value="05:00:00">5:00 am</option>
                <option value="06:00:00">6:00 am</option>
                <option value="07:00:00">7:00 am</option>
                <option value="08:00:00">8:00 am</option>
                <option value="09:00:00">9:00 am</option>
                <option value="10:00:00">10:00 am</option>
                <option value="11:00:00">11:00 am</option>
                <option value="12:00:00">12:00 pm</option>
                <option value="13:00:00">1:00 pm</option>
                <option value="14:00:00">2:00 pm</option>
                <option value="15:00:00">3:00 pm</option>
                <option value="16:00:00">4:00 pm</option>
                <option value="17:00:00">5:00 pm</option>
                <option value="18:00:00">6:00 pm</option>
                <option value="19:00:00">7:00 pm</option>
                <option value="20:00:00">8:00 pm</option>
                <option value="21:00:00">9:00 pm</option>
                <option value="22:00:00">10:00 pm</option>
                <option value="23:00:00">11:00 pm</option>
              </select>
              <select name="dtime_end">
                 <option value="00:00:00">12:00 am</option>
                 <option value="01:00:00">1:00 am</option>
                 <option value="02:00:00">2:00 am</option>
                 <option value="03:00:00">3:00 am</option>
                 <option value="04:00:00">4:00 am</option>
                 <option value="05:00:00">5:00 am</option>
                 <option value="06:00:00">6:00 am</option>
                 <option value="07:00:00">7:00 am</option>
                 <option value="08:00:00">8:00 am</option>
                 <option value="09:00:00">9:00 am</option>
                 <option value="10:00:00">10:00 am</option>
                 <option value="11:00:00">11:00 am</option>
                 <option value="12:00:00">12:00 pm</option>
                 <option value="13:00:00">1:00 pm</option>
                 <option value="14:00:00">2:00 pm</option>
                 <option value="15:00:00">3:00 pm</option>
                 <option value="16:00:00">4:00 pm</option>
                 <option value="17:00:00">5:00 pm</option>
                 <option value="18:00:00">6:00 pm</option>
                 <option value="19:00:00">7:00 pm</option>
                 <option value="20:00:00">8:00 pm</option>
                 <option value="21:00:00">9:00 pm</option>
                 <option value="22:00:00">10:00 pm</option>
                 <option value="23:00:00">11:00 pm</option>
               </select>
              <p name="x"> </p>
              <input id="dtask_duration" name="dtask_duration" type="hidden"></input>
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
          <div>
            <select name="wtime_start">
               <option value="00:00:00">12:00 am</option>
               <option value="01:00:00">1:00 am</option>
               <option value="02:00:00">2:00 am</option>
               <option value="03:00:00">3:00 am</option>
               <option value="04:00:00">4:00 am</option>
               <option value="05:00:00">5:00 am</option>
               <option value="06:00:00">6:00 am</option>
               <option value="07:00:00">7:00 am</option>
               <option value="08:00:00">8:00 am</option>
               <option value="09:00:00">9:00 am</option>
               <option value="10:00:00">10:00 am</option>
               <option value="11:00:00">11:00 am</option>
               <option value="12:00:00">12:00 pm</option>
               <option value="13:00:00">1:00 pm</option>
               <option value="14:00:00">2:00 pm</option>
               <option value="15:00:00">3:00 pm</option>
               <option value="16:00:00">4:00 pm</option>
               <option value="17:00:00">5:00 pm</option>
               <option value="18:00:00">6:00 pm</option>
               <option value="19:00:00">7:00 pm</option>
               <option value="20:00:00">8:00 pm</option>
               <option value="21:00:00">9:00 pm</option>
               <option value="22:00:00">10:00 pm</option>
               <option value="23:00:00">11:00 pm</option>
             </select>
             <select name="wtime_end">
                <option value="00:00:00">12:00 am</option>
                <option value="01:00:00">1:00 am</option>
                <option value="02:00:00">2:00 am</option>
                <option value="03:00:00">3:00 am</option>
                <option value="04:00:00">4:00 am</option>
                <option value="05:00:00">5:00 am</option>
                <option value="06:00:00">6:00 am</option>
                <option value="07:00:00">7:00 am</option>
                <option value="08:00:00">8:00 am</option>
                <option value="09:00:00">9:00 am</option>
                <option value="10:00:00">10:00 am</option>
                <option value="11:00:00">11:00 am</option>
                <option value="12:00:00">12:00 pm</option>
                <option value="13:00:00">1:00 pm</option>
                <option value="14:00:00">2:00 pm</option>
                <option value="15:00:00">3:00 pm</option>
                <option value="16:00:00">4:00 pm</option>
                <option value="17:00:00">5:00 pm</option>
                <option value="18:00:00">6:00 pm</option>
                <option value="19:00:00">7:00 pm</option>
                <option value="20:00:00">8:00 pm</option>
                <option value="21:00:00">9:00 pm</option>
                <option value="22:00:00">10:00 pm</option>
                <option value="23:00:00">11:00 pm</option>
              </select>
             <p name="y"> </p>
             <input id="wtask_duration" name="wtask_duration" type="hidden"></input>
         </div>
        </div>
        <!--display fields for monthly-->
        <div id="mon_task" style='display:none;'>
            <label for="name">Task Schedule: </label>
            <div id="pickup_date"><p><input type="date" class="textbox" id="date_ofthe_month" name="date_ofthe_month" onchange="cal()"/></p></div>
            <div>
              <select name="mtime_start">
                 <option value="00:00:00">12:00 am</option>
                 <option value="01:00:00">1:00 am</option>
                 <option value="02:00:00">2:00 am</option>
                 <option value="03:00:00">3:00 am</option>
                 <option value="04:00:00">4:00 am</option>
                 <option value="05:00:00">5:00 am</option>
                 <option value="06:00:00">6:00 am</option>
                 <option value="07:00:00">7:00 am</option>
                 <option value="08:00:00">8:00 am</option>
                 <option value="09:00:00">9:00 am</option>
                 <option value="10:00:00">10:00 am</option>
                 <option value="11:00:00">11:00 am</option>
                 <option value="12:00:00">12:00 pm</option>
                 <option value="13:00:00">1:00 pm</option>
                 <option value="14:00:00">2:00 pm</option>
                 <option value="15:00:00">3:00 pm</option>
                 <option value="16:00:00">4:00 pm</option>
                 <option value="17:00:00">5:00 pm</option>
                 <option value="18:00:00">6:00 pm</option>
                 <option value="19:00:00">7:00 pm</option>
                 <option value="20:00:00">8:00 pm</option>
                 <option value="21:00:00">9:00 pm</option>
                 <option value="22:00:00">10:00 pm</option>
                 <option value="23:00:00">11:00 pm</option>
               </select>
               <select name="mtime_end">
                  <option value="00:00:00">12:00 am</option>
                  <option value="01:00:00">1:00 am</option>
                  <option value="02:00:00">2:00 am</option>
                  <option value="03:00:00">3:00 am</option>
                  <option value="04:00:00">4:00 am</option>
                  <option value="05:00:00">5:00 am</option>
                  <option value="06:00:00">6:00 am</option>
                  <option value="07:00:00">7:00 am</option>
                  <option value="08:00:00">8:00 am</option>
                  <option value="09:00:00">9:00 am</option>
                  <option value="10:00:00">10:00 am</option>
                  <option value="11:00:00">11:00 am</option>
                  <option value="12:00:00">12:00 pm</option>
                  <option value="13:00:00">1:00 pm</option>
                  <option value="14:00:00">2:00 pm</option>
                  <option value="15:00:00">3:00 pm</option>
                  <option value="16:00:00">4:00 pm</option>
                  <option value="17:00:00">5:00 pm</option>
                  <option value="18:00:00">6:00 pm</option>
                  <option value="19:00:00">7:00 pm</option>
                  <option value="20:00:00">8:00 pm</option>
                  <option value="21:00:00">9:00 pm</option>
                  <option value="22:00:00">10:00 pm</option>
                  <option value="23:00:00">11:00 pm</option>
                </select>
               <p name="z"> </p>
               <input id="mtask_duration" name="mtask_duration" type="hidden"></input>
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

            <label for="name">Assign To: </label>
        <!--//Assign To!!!-->
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

        <label for="name">Task Status: </label>
        <select class="input" id="task_status" name="task_status" value="">
          <option value="Pending">Pending</option>
          <option value="Priority">Priority</option>
          <option value="Delayed">Delayed</option>
          <option value="Done">Done</option>
        </select>

      </fieldset>
      <button type="submit">Assign Task</button>
    </form>
  </body>
</html>
