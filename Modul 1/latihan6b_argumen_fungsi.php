<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Argumen Fungsi/Prosedur</title>
</head>

<body>
<?php
/**
* Mencetak String
* $teks nilai string
* $bold adalah argument opsional
*/
function print_teks($teks, $bold =true){
	echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks('Indonesiaku');
//mencetak dengan huruf tebal

print_teks ('Indonesiaku',false);
//mencetak dengan huruf reguler
?>
</body>
</html>
