<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'crudyoutube');

// if($con){
// 	echo "connected";
// }
// else
// {
// 	echo "not connected";
// }


?>
<center>
<a href="insert.php">Add</a>&nbsp;<a href="update.php">Modify</a>&nbsp;<a href="delete.php">Delete</a>&nbsp;<a href="display.php">Report</a>&nbsp;
</center>
<br/>