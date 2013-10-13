<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Definisi Fungsi/Prosedur</title>
</head>

<body>
<?php
//contoh prosedur
function do_print(){
	//mencetak informasi timestamp
	echo time();
}

//memanggil prosedur
do_print();
echo '<br />';

//contoh fungsi penjumlahan
function jumlah($a, $b){
	return ($a+$b);
}

echo jumlah(2,3);
//output:5
?>
</body>
</html>
