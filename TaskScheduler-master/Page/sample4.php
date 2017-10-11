<?php
if (isset($_GET['user_id'])) {
$user_id = $_GET['user_id'];
$query1 = "SELECT * FROM user WHERE user_id = '$user_id'";
$result1 = mysql_query ($query1);
while ($row = mysql_fetch_array($result1)) {
    $enabled = $row ["enabled"];
}
if ($enabled == 'enabled') {
    $enabled = 'disabled';
} else {
    $enabled = 'enabled';
}
echo $enabled;
    $query1 = "UPDATE user SET enabled = '$enabled'
                WHERE user_id = '$user_id'";
    mysql_query ($query1);
}
?>
<table>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Statues</td>
    </tr>
<?
// Loop through the table and display all records in tabular format
$query = "SELECT * FROM user";
$result = mysql_query ($query);
$count = mysql_num_rows($result); // Count table rows
while ($row = mysql_fetch_array($result))
{
    $user_id = $row["user_id"];
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $user_name = $row["user_name"];
    $email = $row ["email"];
    $account_type = $row ["account_type"];
    $team = $row ["team"];
    $enabled = $row ["enabled"];
?>
<tr>
    <td>><?php echo $user_id; ?></td>
    <td><?php echo $first_name; ?></td>
    <td><?php echo $last_name; ?></td>
    <td><?php echo $user_name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $account_type; ?></td>
    <td><?php echo $team; ?></td>
    <td>< a href="users.php?id=<?php echo $id;?>"><img src="status-toggle_<?php if ($enabled == 'enabled') { echo 'enabled'; } else { echo 'disabled';}?>.png" /></a>
    </td>
</tr>
<?php // Close our while loop
}
?>
</table>
</form>
