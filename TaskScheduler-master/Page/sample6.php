<html>
<head>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <div class="checkbox">
    <br>
    <label style="padding-right:0px;">
      <input type="checkbox" name="cod" value="1">My shop offers <b>Cash on Delivery</b>
    </label>
  </div>

  <select name="" style="padding-left:0px;" id='select'>
    <option value="">Around Metro Manila Only</option>
    <option value="">Outside Metro Manila Only</option>
    <option value="">Both</option>
  </select>
  <script>
  $('[name="cod"]').on('change', function() {
  $('#select').toggle(this.checked);
  }).change();
  </script>
</body>

</html>
