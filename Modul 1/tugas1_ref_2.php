<?php
function kalimat(&$string)
{
    $string .= 'adalah......';
}
$str = 'lima kali empat, ';
kalimat($str);
echo $str;    // output lima kali empat adalah......'

function jumlah(&$nilai) {
$nilai++;
}
$input=19;
jumlah($input);
echo $input; //output 20

?>
