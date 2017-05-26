<!DOCTYPE html>
<html>
<head>
	<title>進入使用頁面</title>
</head>
<body>

<?php

session_start();
if(isset($_SEESION["success"])){
	echo "<center>歡迎進入</center></br>";
	echo "<center><a href='Index.html'></center>";
}else{
	echo "<center>非法進入</center>";
	header("Refresh:3;url=Index.html");  
}

?>

</body>
</html>