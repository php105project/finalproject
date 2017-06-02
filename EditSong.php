<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>編輯歌曲</title>
	<center>


	<?php

session_start();
if(isset($_SESSION["manager"])){
	echo "<center>歡迎管理者進入歌曲編輯</center></br>";
}else{
	echo "<center>非法進入</center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);

echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "song_id";
echo "</td><td>";
echo "songname";
echo "</td><td>";
echo "singer";
echo "</td><td>";
echo "link";
echo "</td><td>";
echo "clickrate";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["song_id"];
echo "</td><td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["link"];
echo "</td><td>";
echo $row["clickrate"];
echo "</td>";
echo "<tr>";
}
echo "<table>";

?>
</center>
</head>
<center>

</center>

<center>
</br>
</br>
</br>
新增歌曲

<form action="add.php" method="post">
歌名<input type="text" name="Add_songname"><br>
歌手<input type="text" name="Add_singer"><br>
連結<input type="text" name="Add_link"><br>

<input type="submit" name="sent" value="送出"></br>

</form>
</br>
</br>
</br>
刪除歌曲
<form action="del.php" method="post">


歌名<input type="text" name="Del_songname"><br>
歌手<input type="text" name="Del_singer"><br>

<input type="submit" name="sent" value="送出"></br>

</br>
</br>
</br>
<a href="manager.php">回上一頁</a>

</center>
</body>
</html>
