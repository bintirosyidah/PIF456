<html>
	<head>
		<title>Limitasi dan Paging</title>
	</head>
	<body>
		<h2> Daftar Mahasiswa</h2>
		<table border="1" width="600px">
			<th><td>Nim</a></td><td>Nama</a></td><td>Alamat</a></td></th>
<?php
//include script koneksi.php
require_once'../modul4/koneksi.php';

//variabel dan kode awal untuk menentukan posisi halaman saat ini
//dipakai untuk melimit quiery
$batas=5; //satu halaman menampilkan 5 baris
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}

//query data menggunakan limit $posisi dan batas
$query="select * from mahasiswa limit $posisi,$batas ";

$result=mysql_query($query) or die(mysql_error());
$no=1;

while($rows=mysql_fetch_object($result)){
?>

			<tr>
				<td><?php echo $no
				?></td>
				<td><?php	echo $rows -> nim;?></td>
				<td><?php	echo $rows -> nama;?></td>
				<td><?php	echo $rows -> alamat;?></td>
			</tr>
			<?php		$no++;
			}?>
		</table>
		<br>
		<?php		
	//=============PAGING ========================
			$sql_paging = mysql_query("select nim  from mahasiswa");
			$jmldata = mysql_num_rows($sql_paging);
			$jumlah_halaman = ceil($jmldata / $batas);

			echo "Halaman :";
			for($i = 1; $i <= $jumlah_halaman; $i++)
				if($i != $halaman) {
					echo "<a href=StudiKasus.php?halaman=$i>$i</a>|";
				} else {
					echo "<b>$i</b>|";
				}
			mysql_close();?>
		<br>
		Jumlah data :<?php echo $jmldata;?>
	</body>
</html>
