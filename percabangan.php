<?php
$a = 1;
$b = 7;

echo "<h2><b>--Operasi Percabangan IF ELSE--</b></h2>";
echo "<b>Diketahui : </b><br>" ;
echo "a = 1<br> b = 7 <br>maka : <br>" ;
if($a==$b){
	echo 'a sama dengan b, <br> pada if($a==$b) dieksekusi';
}
elseif($a<$b){
	echo 'a lebih kecil dari b, <br>pada elseif($a<$b) dieksekusi';
}
else{
	echo 'a lebih besar dari b,<br> pada else dieksekusi';
}

echo "<br><h2><b>--Operasi Percabangan SWITCH CASE--</b></h2>";
echo "<b>Diketahui : </b><br>" ;
echo "a = 1<br>maka<br>" ;
switch ($a){
case 0:
	echo"a equals 0,<br> pada case 0 di eksekusi";
	break;
case 1:
	echo"a equals 1, <br> pada case 1 di eksekusi";
	break;
case 2:
	echo"a equals 2,<br> pada case 3 di eksekusi";
	break;
}

echo "<br><br><b>Diketahui : </b><br>" ;
$y=3;
echo "y = 3<br>maka<br>" ;
switch ($y){
case 0:
	echo"y equals 0,<br> pada case 0 di eksekusi";
	break;
case 1:
	echo"y equals 1, <br> pada case 1 di eksekusi";
	break;
case 2:
	echo"y equals 2,<br> pada case 2 di eksekusi";
	break;
case 3:
	echo"y equals 3,<br> pada case 3 di eksekusi";
	break;

}
?>