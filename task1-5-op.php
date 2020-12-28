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
    <label for="exampleInputEmail1">Physics:</label>
    <input name="deg1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Chemistry:</label>
     <input name="deg2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     <label for="exampleInputEmail1">Biology:</label>
     <input name="deg3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     <label for="exampleInputEmail1">Math:</label>
     <input name="deg4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     <label for="exampleInputEmail1">Computer</label>
     <input name="deg5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group form-check">
  </div>
  <button style="margin-bottom: 20px" type="submit" class="btn btn-primary">Submit</button>
  <br>
  <?php
  if(!empty($_POST)){
    $total = ($_POST['deg1'])+($_POST['deg2'])+($_POST['deg3'])+($_POST['deg4'])+($_POST['deg5']);
  $tot_per = $total / 5;
  if($tot_per >=90 ){
    echo "your grade is A";
  }
  else if($tot_per >=80){
   echo "your grade is B"; 
  }
  else if($tot_per>=70){
    echo "your grade is C";
  }
  else if($tot_per >=60){
    echo "your grade is D";
  }
  else if($tot_per>=50){
    echo "your grade is E";
  }
  else{
    echo "your grade is F";
  }
  }

?>
</form>
</body>
</html>
