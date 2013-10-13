<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Seleksi</title>
</head>

<body>
<?php
$i=0;
if ($i ==0){
	echo "i equals 0";
}
elseif($i ==1){
	echo "i equals 1";
}
elseif($i ==2){
	echo "i equals 2";
}

echo '<br>';

//ekuivalen, dengan pendekatan switch
switch($i){
	case 0:
		echo "i equals 0";
	break;
	case 1:
		echo "i equals 1";
	break;
	case 2:
		echo "i equals 2";
	break;
}
?>
</body>
</html>
