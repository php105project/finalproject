<?php




$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");

$add_num=$_POST["add_num"];


$sql="SELECT * FROM recom WHERE recom_id = '$add_num'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

 echo $row[0];
$songname = $row[1];
$singer = $row[2];
$link_db = $row[3];




$sql_INSERT="INSERT into song(songname,singer,link) VALUES ('$songname','$singer,'$link_db')"; 





if($row[0]==$add_num){
	if(mysqli_query($link,$sql_INSERT)){
		echo "<center>新增成功，3秒後自動跳回上頁</center>";
		header("Refresh:3;url=review.php");
	}
}else{
	echo "<center>推薦不存在，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=review.php");
}

?>