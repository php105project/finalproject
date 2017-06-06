<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理者頁面</title>
<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}

?>
</head>
<body>
<center>


<?php


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );


mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);

$sql_rec="SELECT * FROM recom";
$result_rec = mysqli_query($link,$sql_rec);

echo "使用者推薦的歌曲";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
echo "</td><td>";
echo "推薦次數";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result_rec)){
echo "<tr>";
echo "<td>";
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["songinform"];
echo "</td><td>";
echo $row["recom_num"];
echo "</td>";
echo "<tr>";
}

echo "<table>";



echo "已存在歌曲";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌曲ID";
echo "</td><td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
echo "</td><td>";
echo "點擊次數";
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


歌曲ID<input type="text" name="song_id"><br>


<input type="submit" name="sent" value="送出"></br>

</form>

</br>
</br>
</br>

<a href="member.php">管理會員資料</a>


</br>
</br>
</br>

<a href="del_all_rec.php">***清除全部推薦資料***</a>

</br>
</br>
</br>
<a href='Index.php'>登出</a>
</center>

</body>
</html>


