<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>測試登入畫面</title>
</head>
<body>

<form action="Login.php" method="post">
	<center>
		帳號:<input type="text" name="id"></br>
		密碼:<input type="password" name="pwd"></br>
		<input type="submit" name="sent" value="送出"></br>
		<a href="Register.php">申辦帳號</a></br>
	</center>
</form>

</body>
</html>

<?php
session_start();
if(isset($_SESSION["user"])){
	unset($_SESSION["user"]);
}elseif(isset($_SESSION["manager"])){
	unset($_SESSION["manager"]);
}
?>