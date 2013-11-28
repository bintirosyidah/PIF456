<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("myweb", $con);

$result = mysql_query("SELECT * FROM mahasiswa");

while($row = mysql_fetch_array($result)) {
  echo $row['nama'] . "\t" . $row['alamat']. "\n";
}

mysql_close($con);
?> 