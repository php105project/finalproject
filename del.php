<?php
/*
$songname=$_POST["Del_songname"];
$singer=$_POST["Del_singer"];
*/
$song_id=$_POST["song_id"];

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




$sql_DELETE="DELETE FROM song WHERE song_id LIKE '$song_id'"; 
$sql="SELECT * FROM song WHERE song_id LIKE '$song_id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


if($row[0]==""||$row[0]!=$song_id){	
	echo "<center>歌曲不存在，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=manager.php");	
}elseif($row[0]==$song_id){
	if(mysqli_query($link,$sql_DELETE)){
		echo "<center>歌曲已刪除，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=manager.php");
	}
}
?>