<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	pekerjaan
	<select name="job">
		<option value="Mahasiswa">Mahasiswa
		<option value="ABRI">ABRI
		<option value="PNS">PNS
		<option value="Swasta">Swasta
	</select><br />
	<input type="submit" value="ok"/>
	</form>
	
	<?php
		if(isset($_POST['job'])){
			echo $_POST['job'];
		}
	?>
<body>
</body>
</html>
