<!DOCTYPE html>
<html>
<head>
	<title>註冊頁面</title>
</head>
<body>

<form action="RegisterProcess.php" method="post">
	<center>
		帳號:<input type="text" name="id"></br>
		密碼:<input type="password" name="pwd"></br>
		再輸入一次密碼:</br>
		<input type="password" name="pwd1"></br>
		性別:<select name="sex">
			<option value="男">男</option>
			<option value="女">女</option>
		</select></br>
		<input type="submit" name="sent" value="送出"></br>
		<a href="Index.html">已有帳密，請按此登入</a>
</form>

</body>
</html>


<?php
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
/*
if($link==true){
	echo "connect";
}else{
	echo "failed";
}

$final_database="final_database";


if ( !mysqli_select_db($link, $final_database) ){
   echo("無法開啟 $final_database 資料庫!<br/>");
}
else{
   echo "資料庫: $final_database 開啟成功!<br/>";
}
*/

$result=mysqli_query($link,"SELECT `username` FROM userdata");


while($row=mysqli_fetch_assoc($result)){

	echo $row["username"];


}

?>