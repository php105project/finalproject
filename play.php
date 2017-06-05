
<!DOCTYPE html>
<html>
<head>

</head>
<body>



<?php
header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'cc1124'
					 ,'final_database' );

mysqli_query($link,'SET NAMES utf8');

$id=$_GET['id'];

$sql="SELECT * FROM song WHERE song_id ='$id'";
$result=mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

$url=$_SERVER[$row[3]]; 


?>



<iframe width="560" height="315" src="&&&&&" frameborder="0" allowfullscreen></iframe>


</body>
</html>


