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
    <label for="exampleInputEmail1">First Number:</label>
    <input name="num1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Second Number:</label>
    <input name="num2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Operation:</label>
    <input name="op" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group form-check d-flex justify-content-center">
    <button class="btn btn-primary" style="margin-bottom: 20px" type="submit" >Submit</button>
  </div>
  
  <br>
  <?php
  if(!empty($_POST)){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $op = $_POST['op'];
  if($op == "+"){
    $result = $num1 + $num2;
  }
  else if($op == "-"){
    $result = $num1 - $num2;
  }
  else if ($op == "*"){
    $result = $num1 * $num2;
  }
  else if ($op == "/"){
    $result = $num1 / $num2;
  }
  echo $result;
  }

?>
</form>
</body>
</html>
