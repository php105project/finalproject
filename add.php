<?php

$songname=$_POST["Add_songname"];
$singer=$_POST["Add_singer"];


session_start();
if(isset($_SESSION["manager"])){
	echo "<center>歡迎管理者</center></br>";
}else{
	echo "<center>非法進入</center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");

$sql_INSERT="INSERT into song(songname,singer) VALUES ('$songname','$singer')"; 
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($row[0]!=$songname || $row[1]!=$singer){
	if(mysqli_query($link,$sql_INSERT)){
		echo "<center>新增成功，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=EditSong.php");
	}
}elseif($row[0]==$songname && $row[1]==$singer){
	echo "<center>歌曲已存在，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=EditSong.php");
}

?>