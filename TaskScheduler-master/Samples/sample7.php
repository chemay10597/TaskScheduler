<html>
<head>
</head>
<body>

<?php
$connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($connect,"SELECT task_name,task_status FROM task");

?>


<form method="post" action="">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php

while($row = mysqli_fetch_array($result))
            {
$task_name = $row['task_name'];
$task_status = $row['task_status'];
?>


<td width="100"></td>
<td><?=$task_name?></td>
</tr>
<tr>
<td width="100">Task Name</td>
<td><input name="mandagid" type="text" value="<?=$task_name?>"></td>
</tr>
<tr>
<td width="100">task_status</td>
<td><input name="tisdagid" type="text" value="<?=$task_status?>"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<?php } ?>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>



<?php

if(isset($_POST['update']))
{

  $task_name = $row['task_name'];
  $task_status = $row['task_status'];

  mysqli_query($connect, "UPDATE task SET task_status = 'unassigned' WHERE task_name = 'qwert'");
          if(mysqli_affected_rows($connect) > 0){
          } else {
            echo mysqli_error ($connect);
          }
}

?>
</body>
</html>
