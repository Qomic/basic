<?php
$mysql_hostname = 'sajo.cagmxbo3kze2.ap-northeast-2.rds.amazonaws.com';
$mysql_username = 'careadmin';
$mysql_password = 'hackers';
$mysql_database = 'care_db';

$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
	
mysqli_select_db($connect, $mysql_database) or die('DB connection ERROR');
?>
