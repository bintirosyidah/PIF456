<?php
echo "<h2><b>--Operasi Perulangan WHILE--</b></h2>";
echo "<b>Diketahui : </b><br>";
echo "a = 0 ";
echo "<br>jika a = 0 ; a++ ; a<10";
echo "<br><b>maka hasilnya : </b><br>";
$a =0;
while ($a<10){
	echo $a;
	echo ",&nbsp";
//inkerement counter
$a++;
}

echo "<br><h2><b>--Operasi Perulangan DO WHILE--</b></h2>";
echo "<b>Diketahui : </b><br>";
echo"a=10<br> do : a++ <br> while : a<15 <br> <b>hasinya:</b><br>";
do{
	echo $a;
	echo ",&nbsp";
$a++;
}while ($a<15);

echo "<br><h2><b>--Operasi Perulangan FOR--</b></h2>";
echo "<b>Diketahui : </b><br>";
echo "for(d=20;d>10;d--)<br>";
echo "<b>hasilnya:</b><br>";
for($d=20;$d>10;$d--){
	echo $d;
	echo ",&nbsp";
}

echo "<br><h2><b>--Operasi Perulangan FOREACH--</b></h2>";
echo "<b>Diketahui : </b><br>";
echo "c=array(1,2,3,4)<br>";
echo "foreach(c as nilai)<br>";
echo "<br><b>maka hasilnya : </b><br>";
echo "nilai =";
$c=array(1,2,3,4);
foreach($c as $nilai){
	echo $nilai;
	echo ",&nbsp";
}


?>