<?php
error_reporting(0);
include 'conn.php';



	$name = $_POST['name'];
    $lastname = $_POST['lastname'];
	$address = $_POST['address'];

	$q = " SELECT * FROM `stud` " ;

	$query =mysqli_query($con,$q);



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
	<div class="container">
		<div class="col-lg-12">
			<br><br>
			
			 <h1 align="center">Display table data</h1>
			 <br>
			<table class="table table-striped table-hover">
				<tr class="bg-dark text-center text-white">
					<td>id</td>
					<td>name</td>
					<td>lastname</td>
					<td>address</td>
					<td>delete</td>
					<td>update</td>
				</tr>	

				<?php

include 'conn.php';



	


	$q = "select * from student";

	$query =mysqli_query($con,$q);
	while($res=mysqli_fetch_array($query)){



?>	

				<tr class="text-center">
					<td><?php echo $res['id'];?></td>
					<td><?php echo $res['name'];?></td>
					<td><?php echo $res['lastname'];?></td>
					<td><?php echo $res['address'];?></td>
					<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white"> delete</a></button></td>
					<td><button class="btn-danger btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">update</a></button></td>
				</tr>	
				<?php
			     }
			   ?>
	
			</table>
         </div>
     </div>

</body>
</html>