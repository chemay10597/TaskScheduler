<!doctype html>
<html ng-app>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add New Task</title>
      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <form action="index.html" method="post">
      <img src="logo.png" alt="tasksched_logo">
        <h1>Add New Task</h1>
      <fieldset>
        <label for="name">Task Subject </label>
        <input type="text" id="tasksubject" name="task_subject">

        <label for="assginto">Assign To: </label>
        <select id="assign" name="task_assign">
          <optgroup label="Users">
            <option value="name1">USERS</option>
            <option value="name2">Firstname Lastname</option>
            <option value="name3">Firstname Lastname</option>
            <option value="name4">Firstname Lastname</option>
            <option value="name5">Firstname Lastname</option>
            <option value="name6">Firstname Lastname</option>
          </optgroup>
        </select>
        <label>Custom: </label>
        <input type="checkbox" id="name7" value="task_user7" name="user7"><label class="light">Firstname Lastname</label><br>
        <input type="checkbox" id="name8" value="task_user8" name="user8"><label class="light">Firstname Lastname</label><br>
        <input type="checkbox" id="name9" value="task9" name="user9"><label class="light">Firstname Lastname</label>
      </fieldset>
      <fieldset>
      <label for="job">Team:</label>
      <select id="job" name="user_job">
        <optgroup label="Team">
          <option value="techsupport">Technical Support</option>
          <option value="platformops">Platform Ops</option>
        </optgroup>
      </select>
      <label>Recurring Task: </label>
      <input type="checkbox" id="recur_MWF" value="mwf" name="task_mwf"><label class="light">Mon- Wed- Fri</label><br>
      <input type="checkbox" id="recur_TTH" value="tth" name="task_tth"><label class="light">Tue- Thurs</label><br>
      <input type="checkbox" id="recur_Sat" value="sat" name="task_sat"><label class="light">Sat</label>
      </fieldset>
      <button type="submit">Assign Task</button>
    </form>

  </body>
</html>
