<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>使用者搜尋頁面</title>
<?php
	session_start();
	if(isset($_SESSION["user"])){
		echo "<center>歡迎使用者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  
}
?>
</head>

<body>
<center>

<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );




mysqli_query($link,'SET NAMES utf8');

$songname=$_POST['songname']; 
$sql = " SELECT * FROM song WHERE songname LIKE '$songname'";
$result=mysqli_query($link,$sql);

echo "搜尋結果";
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "歌名";
echo "</td><td>";
echo "歌手";
echo "</td><td>";
echo "連結";
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
echo "</td>";
echo "<tr>";
}
echo "<table>";


?>
<a href="user.php">回上一頁</a>
</center>
</body>

</html>
