<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>會員管理</title>
	<center>
	<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}

?>
</center>
</head>
<body>
<center>

<?php
header("Content-Type:text/html; charset=utf-8");

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");

$mem_bye=$_POST["mem_bye"];
$sql="SELECT * FROM userdata WHERE username = '$mem_bye'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

$del_mem = "DELETE FROM userdata WHERE username = '$mem_bye'";

if($row[0]==$mem_bye){
	if(mysqli_query($link,$del_mem)){
		echo "使用者已刪除，三秒後回到上頁";
		header("Refresh:3;url=member.php");

	}
}else{
	echo "成員不存在，三秒後回到上頁";
	header("Refresh:3;url=member.php");
}