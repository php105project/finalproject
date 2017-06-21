<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>新增頁面</title>
	</head>
<body>
<center>
<?php

$id=$_GET['id'];

	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );


mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


$sql_rec="SELECT * FROM recom WHERE recom_id = '$id'";
$result_rec = mysqli_query($link,$sql_rec);
$row_rec = @mysqli_fetch_row($result_rec);

$sql_INSERT="INSERT into song(songname,singer,link,recom_id) VALUES ('$row_rec[0]','$row_rec[1]','$row_rec[2]','$row_rec[5]')"; 
$sql_DELETE="DELETE FROM recom WHERE recom_id LIKE '$id'"; 

	
if (mysqli_query($link,$sql_INSERT)) {
	if(mysqli_query($link,$sql_DELETE)){
			echo "歌曲已新增，三秒後回到上頁";
			header("Refresh:3;url=manager.php");
	}
}


}else{
	echo "<center>非法進入</center>";
	header("Refresh:3;url=Index.php");  
}
?>
</center>
</body>
</html>