<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理者頁面</title>
	<center>


	<?php

session_start();
if(isset($_SESSION["manager"])){
	echo "<center>歡迎管理者進入審核頁面</center></br>";
}else{
	echo "<center>非法進入</center>"; 
	header("Refresh:3;url=Index.php");
}

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
mysqli_query($link,"SET NAMES 'UTF8'");
$sql="SELECT * FROM recom";
$result = mysqli_query($link,$sql);

echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "recom_id";
echo "</td><td>";
echo "songname";
echo "</td><td>";
echo "singer";
echo "</td><td>";
echo "songinform";
echo "</td><td>";
echo "recom_num";
echo "</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["recom_id"];
echo "</td><td>";
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

?>
</center>
</head>
<body>
</br>
</br>
</br>
	<center>
		通過審核
	<form action="add_rec.php" method="post">
	通過推薦編號<input type="text" name="add_num"><br>
	<input type="submit" name="sent" value="送出"></br></br>
	</br>
	</br>
	</br>
	</form>

		刪除審核
	<form action="del_rec.php" method="post">
	刪除推薦編號<input type="text" name="del_num"><br>
	<input type="submit" name="sent" value="送出"></br></br>
	</form>	
	</br>
	</br>
	</br>
	<a href="manager.php">回上一頁</a>

	</center>
</body>
</html>