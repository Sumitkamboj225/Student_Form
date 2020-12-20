<?php
error_reporting(0);
include 'conn.php';

if(isset($_POST['done']) ){

	$name = $_POST['name'];
    	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	



	$q = "INSERT INTO `stud` ( `name`, `lastname`, `address`) VALUES ($name,$lastname,$address)";
	$query =mysqli_query($con,$q);
	
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
	<form method="post">
		<div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Student from</h1>
				
			</div>

				<label>Name:</label>
				<input type="text-white" name="name" class="form-control "><br>
				
				<label>Lastname:</label>
				<input type="text-white" name="lastname" class="form-control "><br>
				<label>Address:</label>
				<input type="text-white" name="address" class="form-control "><br>
				
				<button class="btn btn-success col-lg-12" type="submit" name="done">Submit</button>
		</div>
	</form>
</div>

 
</body>
</html>
