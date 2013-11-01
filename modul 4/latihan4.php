<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akses dan Manipulasi Data</title>
<style type="text/css">
	.even{
	background: #ddd;
	}
</style>
</head>

<body>
<?php
	ini_set('display_error',1);
	
	//meng-include file koneksi dan data handler
	require_once 'koneksi.php';
	require_once 'data_handler.php';
	
	//konstanta nama tabel
	define('MHS','mahasiswa');
	
	//mamnggil fungsi data handler
	data_handler('?m=data');
?>
</body>
</html>
