<html>
<head>
  <script src="library/jquery-3.2.1.min.js"></script>
  <script src="library/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>

</head>

<body>
  <div id="wrap">
  <form name="ff2" href="#" action="get">
    <table id="tt2" border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse" width="450">
      <tr>
        <td width="35%">&nbsp;</td>
        <td width="10%">Hrs (0-12)</td>
        <td width="25%">Mins (0-59)</td>
        <td width="30%">AM/PM</td>
      </tr>
      <tr>
        <td width="35%">Start Time:</td>
        <td width="10%">
          <input type="text" name="startHr" value="2" size="10">
        </td>
        <td width="25%">
          <input type="text" name="startMin" value="20" size="10">
        </td>
        <td width="30%">
          <input type="radio" name="startAmpm" value="0"> am
          <input type="radio" name="startAmpm" value="12"> pm</td>
      </tr>
      <tr>
        <td width="35%">End Time:</td>
        <td width="10%">
          <input type="text" name="endHr" value="4" size="10">
        </td>
        <td width="25%">
          <input type="text" name="endMin" value="10" size="10">
        </td>
        <td width="30%">
          <input type="radio" name="endAmpm" value="0"> am
          <input type="radio" name="endAmpm" value="12"> pm</td>
      </tr>
      <tr>
        <td width="35%">Elapsed Time:</td>
        <td width="10%">
          <input type="button" onclick="calc()" value="Calc">
        </td>
        <td width="25%">
          <input type="text" name="elapsedTimeMin" size="10">
        </td>
        <td width="30%">
          <input type="text" name="elapsedTimeHrs" size="10">
        </td>
      </tr>
    </table>
    <p id="msg">&nbsp;</p>
  </form>
</div>
<!-- end wrap -->

<script>
        var F = document.ff2;
        var msgObj = document.getElementById("msg");

        function calc() {
        var totStartMin, totEndMin, elapsedT, elapsedHrs, eHr, eMin;
        totStartMin = getTime("startAmpm", "Start", "startHr", "startMin");
        if (totStartMin === false) {
        return;
        }
        totEndMin = getTime("endAmpm", "End", "endHr", "endMin");
        if (totEndMin === false) {
        return;
        }
        if (totStartMin > totEndMin) {
        msgObj.innerHTML = "End time must be after start time";
        clear();
        return;
        }
        elapsedT = totEndMin - totStartMin;
        F.elapsedTimeMin.value = "" + elapsedT + " min";
        elapsedHrs = elapsedT / 60;
        eHr = parseInt(elapsedHrs);
        eMin = Math.round((elapsedHrs - eHr) * 60);
        F.elapsedTimeHrs.value = "" + eHr + "hr " + eMin + "min";
        // console.log("elapsedHrs= "+elapsedHrs+" eHr= "+eHr+" eMin= "+eMin+"");
        // console.log("totEndM= "+totEndMin+" totStartMin= "+totStartMin+" elapsedT= "+elapsedT+"");
        }
        // -------------------
        function getTime(am_pm, startOrEnd, Hr, Min) {
        var Hx, Mx;
        if (F[am_pm].value.length === 0) {
        msgObj.innerHTML = "Please select " + startOrEnd + " time AM or PM";
        clear();
        return false;
        }
        Hx = Number(F[Hr].value);
        if (isNaN(Hx)) {
        msgObj.innerHTML = "" + startOrEnd + " Hour must be a number";
        clear();
        return false;
        }
        if (Hx < 0 || Hx > 12) {
        msgObj.innerHTML = "" + startOrEnd + " Hour is out of range";
        clear();
        return false;
        }
        Mx = Number(F[Min].value);
        if (isNaN(Mx)) {
        msgObj.innerHTML = "" + startOrEnd + " Minute must be a number";
        clear();
        return false;
        }
        if (Mx < 0 || Mx > 59) {
        msgObj.innerHTML = "" + startOrEnd + " Minute is out of range";
        clear();
        return false;
        }
        return 60 * (Number(F[Hr].value) + Number(F[am_pm].value)) + Number(F[Min].value);
        }
        // ------
        function clear() {
        setTimeout(function() {
        msgObj.innerHTML = "";
        }, 4000);
        }
</script>

</body>
</html>
