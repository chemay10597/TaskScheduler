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

            $task_id = $_POST['task_id'];
            $task_status = $_POST['task_status'];

            $sql = "UPDATE task ". "SET task_status = $task_status ".
               "WHERE task_id = $task_id" ;
            mysql_select_db('trax_task_scheduler_db');
            $retval = mysql_query( $sql, $connect );

            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";

            mysql_close($connect);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Task ID</td>
                        <td><input name = "task_id" type = "text"
                           id = "task_id"></td>
                     </tr>

                     <tr>
                        <td width = "100">Task Status</td>
                        <td><input name = "task_status" type = "text"
                           id = "task_status"></td>
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
