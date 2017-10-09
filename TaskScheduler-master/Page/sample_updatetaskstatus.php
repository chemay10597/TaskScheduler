<?php include 'databaseconn.php'; ?>

<?php

// table task variables
$task_status = $_POST['task_status'];

//table daily variables

//table weekly variables

//table monthly variables

//table customize variables


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
          echo "<p>Task Added </p>";
          echo "<a href=\"index.php\">Go Back</a>";
        } else {
          echo "Task Not Added<br/>";
          echo mysqli_error ($connect);
        }
?>
