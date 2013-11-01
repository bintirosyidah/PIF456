<?php
$host ='localhost';
$user ='root';
$pass ='binti';
$db='myweb';

$cnn=mysql_connect($host, $user, $pass);
if (!$cnn){
	exit('koneksi gagal');
}
$db=mysql_select_db($db);
if(!$db){
	exit('gagal memilih database');
}
?>