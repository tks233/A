<!DOCTYPE html>
<html lang="en">
<head>
<?php

$conn=mysqli_connect("localhost",'root','123456','users');  



?>

	<meta charset="UTF-8">
	<title>checkdel</title>
</head>
<body>
	
<input type="submit" name="button" value="確定刪除" />&nbsp;&nbsp;
<?php session_start(); ?>


<?php 
$id = $_SESSION['username'];
$sql = "DELETE FROM users WHERE userid = '$id'";
		$result = mysqli_query($conn,$sql);



 ?>



</body>
</html>