<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>管理者頁面</title>
<?php
	session_start();
	if(isset($_SESSION["manager"])){
		echo "<center>歡迎管理者</center></br>";
		echo "<center><a href='Index.php'></center>";
	}else{
		echo "<center>非法進入</center>";
		header("Refresh:3;url=Index.php");  
}

?>
</head>
<body>
<center>
<form method="post">

<a href="EditSong.php">新增刪除歌曲</a></br>

<a href="review.php">檢視推薦</a></br>


<input type="button" value="登出" onclick="location.href=C:\wamp64\www\Index.php">


</form>
</center>
</body>
</html>


