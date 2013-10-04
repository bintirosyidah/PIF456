<?php
$a=18;$b=4;
$penjumlahan = $a+$b;
$pengurangan = $a-$b;
$perkalian = $a*$b;
$pembagian = $a/$b;
$modulus = $a%$b;
$increment =$a++;
$decrement =$b--;
echo "<h2>--Operasi Aritmatika--</h2>";
echo "<b>Diketahui :</b><br>";
echo "a = 18<br>";
echo "b = 4<br><br>";
echo "maka:<br>";
echo "hasil penjumlahan (a + b) = ".$penjumlahan."<br>";
echo "hasil pengurangan (a - b) = ".$pengurangan."<br>";
echo "hasil perkalian (a * b) = ".$perkalian."<br>";
echo "hasil pembagian (a / b) = ".$pembagian."<br>";
echo "hasil modulus (a % b) = " . $modulus."<br>";
echo "hasil increment (a++) = " . $a."<br>";
echo "hasil decrement (b--) = " . $b."<br>";
?>