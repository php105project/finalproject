<?php

header("Content-Type:text/html; charset=utf-8");
$link=@mysqli_connect('localhost'
					 ,'root'
					 ,'284ru/ m6'
					 ,'final_database' );

$sql_del="DELETE FROM recom WHERE 1";


if(mysqli_query($link,$sql_del)){
	echo "推薦資料已清除";
	header('Refresh:3;url=manager.php');
}