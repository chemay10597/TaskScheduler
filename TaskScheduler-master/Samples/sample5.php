<form method="post" action="sample5.php">
    <?php

    $query= "SELECT task_status FROM task ORDER BY task_id ASC" ;
    $result= mysqli_query($query);
    while($row = mysqli_fetch_assoc($result) ){
        echo"<input type=\"hidden\" name=\"id[]\" value=" . $row['task_id'] . " />";
        echo"<input type=\"text\" name=\"fname[]\" value=" . $row['task_status'] . " />";
    }
    ?>
    <input type="submit" value="Save Changes" />

    <?php
    $task_id = $_POST["task_id"];
    $task_status = $_POST["task_status"];
    $sql = "UPDATE task SET task_status = '{$task_status}' WHERE task_id = {$task_id}";

    $result = mysqli_query( $sql );
    ?>
</form>
