<?php
function mencoba($type = "cappuccino")
{
    return "membuat segelas $type.\n";
}
echo mencoba();
echo mencoba(null);
echo mencoba("espresso");

echo '<br>';
echo 'sebanyak		';
function jumlah($nilai) 
{
	$nilai++;
}
$input=5;
jumlah($input);
echo $input;
?>