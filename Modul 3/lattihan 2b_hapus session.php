<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hapus Cookie</title>
</head>

<body>
	<?php
		//inisialisasi data session
		session_start();
		
		//set session jika belum ada
		if(isset($_SESSION['test'])){
			
			//hapus session test
			unset($_SESSION['test']);
			
			echo 'session dihapus';
		}
		else{
			echo 'unset';
			
			//mencetak semua elemen session
			print_r($_SESSION);
		}
		
	?>
	<p>
	Tekan Refresh(FS);
</body>
</html>
