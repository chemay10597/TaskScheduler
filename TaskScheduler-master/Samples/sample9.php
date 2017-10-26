
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connect=mysqli_connect("localhost","root","","trax_task_scheduler_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$result = mysqli_query($connect,"SELECT * FROM task"
if (isset($_GET['submit'])) {
$task_id = $_GET['task_id'];
$task_name = $_GET['task_name'];
$task_status = $_GET['task_status'];
$result = mysqli_query ($connect, "UPDATE task set task_status='$task_status' where task_id='$task_id'");
}
$result = mysqli_query($connect, "SELECT * FROM task");
while($row = mysqli_fetch_array($result)) {
echo "<b><a href='sample9.php?update={$row['task_id']}'>{$row['task_name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$result = mysqli_query($connect, "SELECT * FROM task WHERE task_id=$update");
//$query1 = mysql_query("select * from task where task_id=$update", $connect);
while($row = mysqli_fetch_array($result)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='task_id' value='{$row['task_id']}' />";
echo "<br />";
echo "<label>" . "Task Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='task_name' value='{$row['task_name']}' />";
echo "<br />";
echo "<label>" . "Task Status:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='task_status' value='{$row['task_status']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connect);
?>
</body>
</html>
