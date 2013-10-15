<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Form Administrator</title>
</head>
<body>
<?php
	if(($_POST['user']=='binti') AND ($_POST['pass']=='rosyidah')) {
		echo '<br><br><center>Selamat Datang di Halaman ini USER ' . $_POST['user'].'<br> pass '. $_POST['pass'];
	}
	else {
		echo "<br><br><br><body text='red'><strong><center>INVALID LOGIN<br><br><a href='tugas1.html'><h4>Kembali ke Login</h4></a></center></strong></body>";
	}
?>
</body>
</html> 
