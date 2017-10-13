<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task Scheduler</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="library/bootstrap.min.css">
  <link rel="stylesheet" href="user.css">
  <script src="library/jquery-3.2.1.min.js"></script>
  <script src="library/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div class="container">
  <div class="header">
      <img src="logo.png" alt="Logo" style="width:270px;" height="90px;">
  </div>
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Daily</a></li>
        <li><a href="#section2">Weekly</a></li>
        <li><a href="#section3">Monthly</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alerts <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1">
        <h1> Daily </h1>
        <table>
          <tr>
            <th>Task Subject</th>
            <th>Task Description</th>
            <th>Priority</th>
            <th>Assign To</th>
            <th>Team</th>
            <th>Recurring Task</th>
            <th>Start Date</th>
            </tr>
          </table>
      </div>
      <div id="section2">
        <h1>Weekly</h1>
        <table>
          <tr>
            <th>Task Subject</th>
            <th>Task Description</th>
            <th>Priority</th>
            <th>Assign To</th>
            <th>Team</th>
            <th>Recurring Task</th>
            <th>Start Date</th>
            </tr>
          </table>
      </div>
      <div id="section3">
        <h1>Monthly</h1>
        <table>
          <tr>
            <th>Task Subject</th>
            <th>Task Description</th>
            <th>Priority</th>
            <th>Assign To</th>
            <th>Team</th>
            <th>Recurring Task</th>
            <th>Start Date</th>
            </tr>
          </table>
        </div>
      <div id="section41">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section42">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
