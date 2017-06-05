<!DOCTYPE html>
<html>
<head>
	<title>註冊過程</title>
</head>
<body>

<?php

session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$pwd1=$_POST["pwd1"];
$gender=$_POST["sex"];

$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );
$sql_INSERT="INSERT into userdata(username,password,gender) VALUES ('$id','$pwd','$gender')"; 
$sql="SELECT * FROM userdata WHERE username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);



if($pwd==$pwd1 && $row[0]!=$id){
	if(mysqli_query($link,$sql_INSERT)){
		echo "<center>註冊成功，三秒後跳轉至登入頁面</center>";
		header('Refresh:3;url=index.php');
	}
}elseif($pwd==$pwd1 && $row[0]==$id){
	echo "<center>註冊失敗，帳號重複，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=Register.php");
}else{
	echo "<center>註冊失敗，密碼有誤，3秒後自動跳回上頁</center>";
	header("Refresh:3;url=Register.php");
}

?>



</body>
</html>