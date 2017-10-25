<html>

   <head>
      <title>Update a Record in MySQL Database</title>
   </head>

   <body>
      <?php
         if(isset($_POST['update'])) {
           $connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
           // Check connection
           if (mysqli_connect_errno())
           {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }

           $task_id = $row['task_id'];
           $task_status = $row['task_status'];

           mysqli_query($connect, "UPDATE task SET task_id = '$task_id', task_status = '$task_status' WHERE task_id = '$task_id'");
                   if(mysqli_affected_rows($connect) > 0){
                   } else {
                     echo mysqli_error ($connect);
                   }

            mysqli_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Task ID</td>
                        <td><input name = "task_id" type = "text"
                           id = "emp_id"></td>
                     </tr>

                     <tr>
                        <td width = "100">Task Status</td>
                        <td><input name = "task_status" type = "text"
                           id = "emp_salary"></td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit"
                              id = "update" value = "Update">
                        </td>
                     </tr>

                  </table>
               </form>
            <?php
         }
      ?>

   </body>
</html>
