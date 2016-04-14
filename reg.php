<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>註冊你的帳號</title>
</head>
<body>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register.php">
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /> <br>
再一次輸入密碼：<input type="password" name="pw2" /> <br>
電話：<input type="text" name="phone" /> <br>
地址：<input type="text" name="address" /> <br>
email：<input type="text" name="email" /> <br>
<input type="submit" name="button" value="確定" />



<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connection.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if(isset($id)  && isset($pw)  && isset($pw2)  && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into users (userid, userpwd, phone, email) values ('$id', '$pw', '$phone', '$email')";
        if(mysqli_query($conn,$sql))
        {
                echo '新增成功!';
                
        }
        else
        {
                echo '新增失敗!';
               
        }
}
else
{
        echo '請填入資訊';
      
}
?>

</form>

</body>
</html>