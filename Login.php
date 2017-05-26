<!DOCTYPE html>
<html>
<head>
	<title>登入過程</title>
</head>
<body>

<?php

session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];

$manid="q17009";
$manpwd="q1633218932";

echo "<center>你的帳戶為:".$id."</br></center>";
echo "<center>你的密碼為:".$pwd."</br></center>";

if($id==$manid && $pwd==$manpwd){
//	echo "<center>登入成功</center>";
	$_SESSION["success"]="yes";
	setcookie("id",$id,$date);
	header('Location:User.php');
	exit;
}else{
	echo "<center>登入失敗，3秒後自動跳轉登入頁面</center>";
	header("Refresh:3;url=Index.html");                         //如果登入失敗，3秒後自動跳轉Index.php
}

?>

</body>
</html>