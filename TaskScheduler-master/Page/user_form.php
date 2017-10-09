<!doctype html>
<html ng-app>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add New User</title>
      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <form method="post" action="pdatauser.php">
      <h1>Add New User</h1>
      <img src="logo.png" alt="tasksched_logo">
      <fieldset>
        <label for="fname">First Name: </label>
        <input type="text" name="first_name" value="">

        <label for="lname">Last Name: </label>
        <input type="text" name="last_name" value="">

        <label for="uname">Username: </label>
        <input type="text" name="user_name" placeholder="firstname.lastname" value="">

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="user@domain.com" value="">

        <label>Role: </label>
        <select class="input" name="account_type" value="">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
      <label for="user_team">Team:</label>
      <select class="input" name="team" value="">
          <option value="techsupport">Technical Support</option>
          <option value="platformops">Platform Ops</option>
      </select>
      </fieldset>
      <button type="submit">Add User</button>
    </form>
  </body>
</html>
