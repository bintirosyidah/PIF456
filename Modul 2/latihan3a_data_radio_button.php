<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Radio Button</title>
</head>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Jenis Kelamin 
		<input type="radio" name="sex" value="Pria"/>Pria
		<input type="radio" name="sex" value="Wanita"/>Wanita<br />
		
		<input type="submit" value="OK"/>
	</form>
	
	<?php
		if(isset($_POST['sex'])){
			echo $_POST['sex'];
		}
	?>
<body>
</body>
</html>
