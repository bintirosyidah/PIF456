<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
	<tr> 
    	<td>NIM</td>
        <td><input type="text" name="nim" /></td>
     </tr>
     <tr>
     	<td>NAMA</td>
        <td><input type="text" name="nama" size="40" /></td>
      </tr>
      <tr>
      	<td>ALAMAT</td>
        <td><input type="text" name="alamat" size="60"/></td>
      </tr>
      <tr>
      	<td></td>
        <td><input type="submit" value="simpan"/></td>
      </tr>
</table>
</form>

<?php
require_once 'koneksi.php';

//jika filed nim nama diisi lalu submit
if(isset($_POST['nim']) && isset($_POST['nama'])){
	$nim	=$_POST['nim'];
	$nama	=$_POST['nama'];
	$alamat	=$_POST['alamat'];

//tambahkan data baru ke tabel
	$sql ="INSERT INTO mahasiswa
		VALUES('$nim','$nama','$alamat')";
		
	$res =mysql_query($sql);
	if ($res){
		echo 'Data berhasil ditambah';
		mysql_close($res);
	}
	else{
		echo 'gagal menambah data <br>';
		echo mysql_error();
	}
}
echo '<hr>';
//memanfaatkan script pengambilan data untuk menampilakn hasil
require_once 'latihan3a.php';
?>
</body>
</html>
