<!doctype html5>
<html>
  <head>
    <script src="library/jquery-3.2.1.min.js"></script>
    <script src="library/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
  </head>
  <body>
    <input id="start" type="time">
    <input id="end" type="time" onchange="durationdiff()">
    <input id="diff">

    <script>
          function durationdiff(){
            var start = document.getElementById("start").value;
            var end = document.getElementById("end").value;

            function diff(start, end) {
            start = start.split(":");
            end = end.split(":");
            var startDate = new Date(0, 0, 0, start[0], start[1], 0);
            var endDate = new Date(0, 0, 0, end[0], end[1], 0);
            var diff = endDate.getTime() - startDate.getTime();
            var hours = Math.floor(diff / 1000 / 60 / 60);
            diff -= hours * 1000 * 60 * 60;
            var minutes = Math.floor(diff / 1000 / 60);

            return (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
            }
            document.getElementById("diff").value = diff(start, end);
            }
    </script>
  </body>
</html>
