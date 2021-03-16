<?php
$host='localhost';
$dbuser ='root';
$dbpw='dd7873738';
$dbname='user.sql';
$link=mysql_connect($host,$dbuser,$dbpw,$dbname);

if($link){
	mysql_query($link,"set name utf8");
	echo "已正確連線";
}
else{
	echo'無法連線mysql資料庫:<\br>' . mysqli_connect_error();
	
}
?>