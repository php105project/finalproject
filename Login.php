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
$date = strtotime("+7 days", time());


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );
$sql="SELECT * FROM userdata WHERE username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


if($id=="manager" && $pwd=="password"){
	echo "<center>歡迎管理者</center>";
	$_SESSION["manager"]="yes";
	setcookie("id",$id,$date);
	header('Location:manager.php');
}else{
	if($row[0] == $id && $row[1] == $pwd)
	{
    	echo "<center>登入成功</center>";
		$_SESSION["user"]="yes";
		setcookie("id",$id,$date);
		header('Location:User.php');
		exit;
	}else{
		echo "<center>登入失敗，3秒後自動跳轉登入頁面</center>";
		header("Refresh:3;url=Index.php");                        //如果登入失敗，3秒後自動跳轉Index.php
	}
}

?>

</body>
</html>