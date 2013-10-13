<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Casting Tipe</title>
</head>

<body>
<?php

$str ='123abc';

//casting nilai variabel $str ke integer
$bil =(int) $str ; 	//$bil=123

echo gettype($bil);
echo '<br>';
//output : string

echo gettype($bil);
//outpur : integer
?>
</body>
</html>
