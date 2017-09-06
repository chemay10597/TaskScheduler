<?php
$connect=mysqli_connect('localhost','root','','trax_task_scheduler_db');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>
