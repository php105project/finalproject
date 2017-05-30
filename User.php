<!DOCTYPE html>
<html>
<head>
	<title>進入使用頁面</title>
</head>
<body>

<?php

session_start();
if(isset($_SESSION["user"])){
	echo "<center>歡迎使用者</center></br>";
	echo "<center><a href='Index.php'></center>";
}else{
	echo "<center>非法進入</center>";
	header("Refresh:3;url=Index.php");  
}

?>

<input type="button" value="登出" onclick="Location:Index.php">

</body>
</html>