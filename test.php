<?php
header("Content-Type:text/html; charset=utf-8");
$link = @mysqli_connect('localhost','huai','huaihuai123','song');


 mysqli_query($link,'SET NAMES utf8');
 $songname=$_POST['songname']; 
 $sql = " SELECT * FROM song WHERE songname = '$songname'";
 $result=mysqli_query($link,$sql);

 
  while($row = mysqli_fetch_assoc($result))
  {
   echo $row['songname']." ";
   echo $row['singer']."<br>";   
  }
?>