<!DOCTYPE html>
<html lang="en">
<head>
<?php //資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "users";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "123456";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
 ?>



	<meta charset="UTF-8">
	<title>使用者註冊</title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="log.php">
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<a href="register.php">申請帳號</a>
</form>


<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("connection.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM users where userid = '$id'";
$result = mysqli_query($conn,$sql);
$row = @mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        $row[6]+=1;
        $lot=$row[6];
        $sql = "update users set logtimes='$lot' where userid = '$id'";
		$result = mysqli_query($conn,$sql);
        echo '登入成功!';
         echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
else
{
        echo '請輸入帳號密碼!';
        
}
?>


</body>
</html>