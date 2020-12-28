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
    <label for="exampleInputEmail1">Number 1:</label>
    <input name="number1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Number 2:</label>
    <input name="number2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Number 3:</label>
    <input name="number3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group form-check">
  </div>
  <button style="margin-bottom: 20px" type="submit" class="btn btn-primary">Submit</button>
  <br>
  <?php
  if(!empty($_POST)){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];
  	//maximum
    if (($num1 > $num2) && ($num1 > $num3)){
      print_r("the maximum is: ". $num1."<br>");
    }
    else if (($num2 > $num1) && ($num2 > $num3)){
      print_r("the maximum is: ". $num2."<br>");
    }
    else if (($num3 > $num1) && ($num3 > $num2)){
      print_r("the maximum is: ". $num3."<br>");
    }
    //minimum
    if (($num1 < $num2) && ($num1 < $num3)){
      print_r("the minimum is: ". $num1);
    }
    else if (($num2 < $num1) && ($num2 < $num3)){
      print_r("the minimum is: ". $num2);
    }
    else if (($num3 < $num1) && ($num3 < $num2)){
      print_r("the minimum is: ". $num3);
    }

  }

?>
</form>
</body>
</html>
