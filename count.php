<?php

header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );

$id=$_GET['id'];

$sql_update = "UPDATE song SET clickrate = clickrate+1 WHERE song_id = '$id'";
$sql="SELECT * FROM song WHERE song_id ='$id'";
$result=mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);



if($row[0]=$id){
	if (mysqli_query($link,$sql_update)) {
		header("Location:$row[3]");
	}
}


