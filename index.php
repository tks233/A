<!DOCTYPE html>
<html lang="en">
<head>

<?php
include("connection.php");

session_start(); 

echo '使用者';

echo $_SESSION['username'];
$id = $_SESSION['username'];
echo '歡迎回來<br>';

echo '您上次的登入時間為';



$sql = "SELECT * FROM users where userid = '$id'";
$result = mysqli_query($conn,$sql);
$row = @mysqli_fetch_row($result);
echo $row[5];

echo '您的登入次數為'.$row[6];
echo'<br>';

echo '頁面即將跳轉';


echo '<meta http-equiv=REFRESH CONTENT=1;url=profile.php>';

?>


	<meta charset="UTF-8">
	<title>登入完成</title>
</head>
<body>




	


</body>
</html>