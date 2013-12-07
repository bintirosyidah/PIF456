<?php session_start();

$user='binti';
$pass='binti';

if (isset($_POST['user']) && isset($_POST['pass'])) {
	$n = trim($_POST['user']);
	$p = trim($_POST['pass']);
	
	if (($n ===$user) && ($p === $pass) ) {
		header("location:../home.php");
	}
	else{
		echo "<script> alert('gagal');history.go(-1)</script>";
	}
}
?>