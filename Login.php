
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

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );



$sql="SELECT * FROM userdata WHERE username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($row[0] == $id && $row[1] == $pwd)
{
    echo "<center>登入成功</center>";
	$_SESSION["success"]="yes";
	setcookie("id",$id,$date);
	header('Location:User.php');
	exit;
}else{
	echo "<center>登入失敗，3秒後自動跳轉登入頁面</center>";
	echo "帳號".$row[0]."/="."$id"."</br>";
	echo "密碼".$row[1]."/="."$pwd"."</br>";
	/*header("Refresh:3;url=Index.html");   */                      //如果登入失敗，3秒後自動跳轉Index.php
}




echo "<center>你的帳戶為:".$id."</br></center>";
echo "<center>你的密碼為:".$pwd."</br></center>";

/*
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
*/
?>

</body>
</html>