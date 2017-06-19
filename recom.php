<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );


mysqli_query($link,'SET NAMES utf8');
 
$username=$_COOKIE['id'];//username

$songname=$_POST['rec_songname'];
$singer=$_POST['rec_singer'];
$songinform=$_POST['songinform'];
/*
$sql_song = "SELECT * FROM song";
$result_song = mysqli_query($link,$sql_song);*/

$sql_uid="SELECT * FROM userdata WHERE username = '$username'";
$result_uid=mysqli_query($link,$sql_uid);
$row_uid=@mysqli_fetch_row($result_uid);
$u_id=$row_uid[3];

$sql_insert = "INSERT into recom(songname,singer,songinform,u_id) VALUES ('$songname','$singer','$songinform','$u_id')";

$sql_update = "UPDATE recom SET recom_num = recom_num+1 WHERE songname = '$songname'";

$sql = "SELECT * FROM recom WHERE songname ='$songname'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if($songname!="" && $singer!="" && $songinform!=""){
	if($row[0]!=$songname || $row[1]!=$singer){
		if(mysqli_query($link,$sql_insert)){
			echo "<center>推薦已送出，3秒後自動跳回上頁</center>";
			header("Refresh:3;url=recome.php");
		}
	}elseif($row[0]==$songname && $row[1]==$singer){
		if(mysqli_query($link,$sql_update)){
			echo "<center>推薦已存在，推薦次數+1，3秒後自動跳回上頁</center>";
			header("Refresh:3;url=recome.php");
		}
	}
}else{
	echo "<center>推薦失敗</center>";
	header("Refresh:3;url=recome.php");
}

?>
