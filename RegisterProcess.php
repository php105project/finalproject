<!DOCTYPE html>
<html>
<head>
	<title>註冊過程</title>
</head>
<body>

<?php

session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$pwd1=$_POST["pwd1"];

if($pwd==$pwd1){
	echo "<center>註冊成功</center>";
	header('Location:User.php');
}else{
	echo "<center>註冊失敗，密碼有誤，3秒後自動跳回上頁</center>";
//	echo "<center><a href='Register.php'>回上頁</center>";
	header("Refresh:3;url=Register.php");
}

?>



</body>
</html>