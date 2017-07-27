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

    <form action="index.html" method="post">
      <h1>Add New User</h1>
      <img src="logo.png" alt="tasksched_logo">
      <fieldset>
        <label for="name">First Name: </label>
        <input type="text" id="fname" name="user_fname">

        <label for="name">Last Name: </label>
        <input type="text" id="lname" name="user_lname">

        <label for="name">Username: </label>
        <input type="text" id="username" name="username" placeholder="firstname.lastname">

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" placeholder="user@domain.com">

        <label>Role: </label>
        <input type="radio" id="role_user" name="user"><label for="user" class="light">User</label><br>
        <input type="radio" id="role_admin" name="admin"><label for="admin" class="light">Admin</label>
      </fieldset>


      <fieldset>
      <label for="job">Team:</label>
      <select id="job" name="user_job">
        <optgroup label="Team">
          <option value="techsupport">Technical Support</option>
          <option value="platformops">Platform Ops</option>
        </optgroup>
      </select>
      </fieldset>
      <button type="submit">Add User</button>
    </form>

  </body>
</html>
