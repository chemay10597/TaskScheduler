<html>
 <head>
  <script langugae="javascript">
   function doCombine()
   {
       document.getElementById('txt3').value = document.getElementById('txt1').value + "." +
       document.getElementById('txt2').value;
   }
  </script>
 </head>
 <body>
  <input type="text" id="txt1" name="txt1" /> +
  <input type="text" id="txt2" name="txt2" onchange="doCombine();" /> =
  <input type="text" id="txt3" name="txt3" />
 </body>
</html>
