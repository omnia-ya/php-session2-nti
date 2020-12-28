<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form method="POST"  style="margin-top: 30px;padding-left: 450px;padding-right: 450px;">
  <div class="form-group">
    <label for="exampleInputEmail1">Electricity units:</label>
    <input name="units" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group form-check">
  </div>
  <button style="margin-bottom: 20px" type="submit" class="btn btn-primary">Submit</button>
  <br>
  <?php
  if(!empty($_POST)){
   $unit = $_POST['units'];
  if ($unit <=50){
    $total = $unit*0.50;
  }
  else if ($unit <=100){
    $total = $unit*0.75;
  }
  else if ($unit <=200){
    $total = $unit*1.2;
  }
  else if ($unit <=250){
    $total = $unit*1.3;
  }
  else if ($unit >250){
    $total = $unit*1.5;
  }
  $tot_price = ($total*0.2)+$total;
  print_r("the total electricity bill: ".$total.'<br>');
  print_r("after the additional charge: ".$tot_price);
  
  }

?>
</form>
</body>
</html>
