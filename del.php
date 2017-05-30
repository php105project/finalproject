<?php

$songname=$_POST["Del_songname"];
$singer=$_POST["Del_singer"];


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

$sql_DELETE="DELETE FROM song WHERE songname LIKE '$songname'"; 
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($row[0]!=$songname || $row[1]!=$singer){	
	echo "<center>歌曲不存在，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=EditSong.php");	
}elseif($row[0]==$songname && $row[1]==$singer){
	if(mysqli_query($link,$sql_DELETE)){
		echo "<center>歌曲已刪除，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=EditSong.php");
	}
}

?>