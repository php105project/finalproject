<!DOCTYPE html>
<html>
<head>
	<title>進入使用頁面</title>
</head>
<body>
<center>
<?php

session_start();
if(isset($_SESSION["user"])){
	echo "<center>歡迎使用者</center></br>";

}else{
	echo "<center>非法進入</center>";
	header("Refresh:3;url=Index.php");  
}


?>

<?php



$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM song";
$result = mysqli_query($link,$sql);

echo "已存在歌曲";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
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
echo $row["songname"];
echo "</td><td>";
echo $row["singer"];
echo "</td><td>";
?>

<a href="count.php?id=<?php echo $row["song_id"];?>"><?php echo $row["link"];?></a>

<?php
echo "</td><td>";
echo $row["clickrate"];
echo "</td>";
echo "<tr>";
}
echo "<table>";

?>

<form action="SBN_result.php" method="post">

請輸入搜尋歌名：<input type="text" name="songname"><br>搜尋請輸入全名<br>

<input type="submit" value="找歌來聽">

</form>
<br><br>OR<br><br>
<form action="SBS_result" method="post">

輸入搜尋歌手：<input type="text" name="singer"><br>搜尋請輸入全名<br>

<input type="submit" value="找歌來聽"><br><br><br>


<a href="recome.php">推薦新歌</a><br>

<br>
<br>
<br>

<a href='index.php'>登出</a>
</center>
</body>
</html>