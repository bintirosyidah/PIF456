<?php
$a=6;
$b=9;

$c=$a<$b;
$d=$a>$b;
$e=$a<=$b;
$f=$a>=$b;
$g=$a==$b;
$h=$a!=$b;
$i=$c&&$h;
$j=$c||$d;
$k=!(d);
$l=$c&&$d;
$m=$h||$g;
$n=!m;

echo "<h2><b>--Operator Logika--</b></h2><br>";
echo "<b>Diketahui</b><br>";
echo "a = 6 <br>";
echo "b = 9 <br><br>";
echo "1 = true;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 = false<br>";
echo "Menampilkan a < b ? ".$c."<br>";
echo "Menampilkan a > b ? ".$d."<br>";
echo "Menampilkan a <= b ? ".$e."<br>";
echo "Menampilkan a >= b ? ".$f."<br>";
echo "Menampilkan a == b ? ".$g."<br>";
echo "Menampilkan a != b ? ".$h."<br>";
echo "Menampilkan (6<9 && 6!=9) ? ".$i."<br>";
echo "Menampilkan (6<9 && 6>9) ? ".$l."<br>";
echo "Menampilkan (6<9 || 6>9) ? ".$j."<br>";
echo "Menampilkan (6!=9 || 6==9) ? ".$m."<br>";
echo "Menampilkan !(a > b) ? ".$k."<br>";
echo "Menampilkan !(6!=9 || 6==9) ? ".$n."<br>";

?>


