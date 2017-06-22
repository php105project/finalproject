<!DOCTYPE html>
<html>
<head>
	<title>數據統計</title>
	<?php


$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );


mysqli_query($link,"SET NAMES 'UTF8'");
?>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	$sql="SELECT * FROM userdata";
	$count_male = "SELECT COUNT(gender) FROM userdata WHERE gender like 'male'";
	$count_female = "SELECT COUNT(gender) FROM userdata WHERE gender like 'female'";
	$result = mysqli_query($link,$sql);
	$result_male = mysqli_query($link,$count_male);
	$result_female = mysqli_query($link,$count_female);

	$sql_song="SELECT * FROM song";
	$result_song = mysqli_query($link,$sql_song);

	$sql_rec="SELECT * FROM recom";
	$result_rec = mysqli_query($link,$sql_rec);


	echo "會員清單";
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>";
	echo "帳號";
	echo "</td><td>";
	echo "密碼";
	echo "</td><td>";
	echo "性別";
	echo "</td>";
	echo "</tr>";
	while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["username"];
	echo "</td><td>";
	echo $row["password"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td>";
	echo "<tr>";
	}
	echo "<table>";

	$row_female = mysqli_fetch_array($result_female);
	$row_male = mysqli_fetch_array($result_male);
	echo "<br>";
	echo "<br>";
	echo "用戶男女比例統計：";
	echo "<br>";
	echo "女生".$row_female[0]."位";
	echo "<br>";
	echo "男生".$row_male[0]."位";

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
	echo "</table>";

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
echo "</t數據統計d><td>";
echo $row["singer"];
echo "</td><td>";
echo $row["link"];
echo "</td><td>";
echo $row["clickrate"];

echo "</td>";
echo "<tr>";
}
echo "<table>";




	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}
?>
</body>
</html>