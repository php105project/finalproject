<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>會員管理</title>
	<center>
	<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";

	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  

}

?>
</center>
</head>
<body>
<center>

<?php
header("Content-Type:text/html; charset=utf-8");

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM userdata";
$count_male = "SELECT COUNT(gender) FROM userdata WHERE gender like 'male'";
$count_female = "SELECT COUNT(gender) FROM userdata WHERE gender like 'female'";
$result = mysqli_query($link,$sql);
$result_male = mysqli_query($link,$count_male);
$result_female = mysqli_query($link,$count_female);

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


?>
</br></br></br>

<form action="del_mem.php" method="post">

刪除會員：</br>
會員名稱<input type="text" name="mem_bye">
	
<input type="submit" name="sent" value="送出"></br>
</form>

</br>
</br>
</br>

<a href='manager.php'>回上一頁</a>

</center>
</body>
</html>