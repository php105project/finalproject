<?php
/*
$songname=$_POST["Del_songname"];
$singer=$_POST["Del_singer"];
*/
$id=$_GET["id"];

session_start();
if(isset($_SESSION["manager"])){
	echo "<center>歡迎管理者</center></br>";

}else{
	echo "<center>非法進入</center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");




$sql_DELETE="DELETE FROM song WHERE song_id LIKE '$id'"; 
$sql="SELECT * FROM song WHERE song_id LIKE '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);



	if(mysqli_query($link,$sql_DELETE)){
		echo "<center>歌曲已刪除，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=manager.php");
	}

?>