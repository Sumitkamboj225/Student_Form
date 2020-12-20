<?php
 error_reporting(0);
 include 'conn.php';
 
 if(isset($_POST['done'])){
    
    $id = $_GET['id'];
	$name = $_POST['name'];
    $lastname = $_POST['lastname'];
	$address = $_POST['address'];



	$q = "UPDATE `stud` SET `name`=$name WHERE id in (1)";
	//mysqli_query($db, "UPDATE info SET name='$name', where id in(2)");
	//$_SESSION['message'] = "Address updated!"; 
	

	$query =mysqli_query($con,$q);
	//$_SESSION['message'] = "lastname updated!";

	header('location:display.php');
	
	

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
				<h1 class="text-white text-center">update operation</h1>
				
			</div>

				<label>Name:</label>
				<input type="text-white" name="name" class="form-control ">
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
