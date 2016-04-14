<!DOCTYPE html>
<html lang="en">
<head>
	<?php

$conn=mysqli_connect("localhost",'root','123456','users');  



?>

	<meta charset="UTF-8">
	<title>修改資料</title>
</head>
<body>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="profile.php">
email：<input type="text" name="email" /> <br>
密碼：<input type="password" name="pw" /> <br>
電話：<input type="text" name="phone" /> <br>
<input type="submit" name="button" value="修改" />&nbsp;&nbsp;

<a href="checkdel.php"> 刪除帳號</a>


<?php 
session_start(); 

$id = $_SESSION['username'];



	if(isset($_POST['email'])){$email =$_POST['email'];
		$sql = "update users set email='$email' where userid = '$id'";
		$result = mysqli_query($conn,$sql);}
	if(isset($_POST['pw'])){$pw =$_POST['pw'];
		$sql = "update users set userpwd='$pw' where userid = '$id'";
		$result = mysqli_query($conn,$sql);}
	if(isset($_POST['phone'])){$phone =$_POST['phone'];
		$sql = "update users set phone='$phone' where userid = '$id'";
		$result = mysqli_query($conn,$sql);}


 ?>

</body>
</html>