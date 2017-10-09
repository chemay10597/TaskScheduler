<?php include 'databaseconn.php'; ?>
<?php

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
          echo "<p>User Added </p>";
          echo "<a href=\"index.php\">Go Back</a>";
        } else {
          echo "User Not Added<br/>";
          echo mysqli_error ($connect);
        }
?>
