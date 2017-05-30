<?php
header("Content-Type:text/html; charset=utf-8");
$link = @mysqli_connect('localhost','huai','huaihuai123','recommend');


 mysqli_query($link,'SET NAMES utf8');
 $songinform =$_POST['songinform'];

  $sql_insert = "INSERT INTO recom(songinform) VALUES ('$songinform')";
  $result = mysqli_query($link,$sql_insert) ;

  $sql_query = "SELECT * from recom";
  $result=mysqli_query($link,$sql_query);

?>
