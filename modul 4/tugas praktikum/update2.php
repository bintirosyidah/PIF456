<?php
session_start();
if ($_SESSION['$_POST[user]'.'$encrypt_pass']!=1){
header("location:index.html");}
else {
include "koneksi.php";
?>

<html>
<head>
	<title>Formulir Siswa</title>
	<link rel="stylesheet" type="text/css" href="mos-style.css">
</head>
<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
			Hallo, Administrator<br>
			<a href="">Help</a> | <a href="logout.php">Keluar</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="wrapper">
	<div id="leftBar">
		<ul>
			<li style="font-color:#00CC33"><a href="menu.php">Dashboard</a></li>
			<li><a href="update2.php">Data Siswa</a></li>
			<li><a href="mapel.php">Data Mapel</a></li>
			<li><a href="ambil_mapel_data.php">Data<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siswa-Mapel</a></li>
		</ul>
	</div>
	<div id="rightContent">
		<div class="updatesiswa">
			<h3>Data Siswa</h3>
		</div>
			<form action="search.php" method="post">

			<table border="0" align="center">
				<tr>
			  		<td align="right"><b>NISN</b></td><input type="hidden" name="module" value="biodata" />
					<td align="left"><input name="nis" type="text" id="nis" size="30" /></td>
					<td> <input type="submit" name="button" id="button" class="button" value="search" />
				</tr>
				<tr>
			</table>
			
			<table class:"data" >
				<tr class:"data" bgcolor="#33CC33">
					<th class:"data" width="30px">NIS</th>
					<th class:"data">Nama</th>
					<th class:"data">Alamat</th>
					<th class:"data">Tempat Lahir</th>
					<th class:"data">Tanggal Lahir</th>
					<th class:"data">Jenis Kelamin</th>
					<th class:"data">Agama</th>
					<th class:"data" width="75px">Action</th>
				</tr>
				
				<?php
					$sql= mysql_query("select * from siswa ");
					while ($isi= mysql_fetch_array($sql)){
				?>
				
				<tr class:"data">
					<td class:"data"> <?php echo $isi['nis']; ?> </td>
					<td class:"data"> <?php echo $isi['nama']; ?> </td>
					<td class:"data"> <?php echo $isi['alamat']; ?> </td>
					<td class:"data"> <?php echo $isi['tempat_lhr']; ?> </td>
					<td class:"data"> <?php echo $isi['tanggal_lhr']; ?> </td>
					<td class:"data"> <?php echo $isi['jenis_kelamin']; ?> </td>
					<td class:"data"> <?php echo $isi['agama'];?> </td>
					<td class:"data">  <a href="detail.php?id=<?php echo $isi['nis']?>">Detail</a> | <a href="delete.php?id=<?php echo $isi['nis']?>">Hapus</a> | <a href="biodata_edit3.php?id=<?php echo $isi['nis']?>">Edit</a> </td>
				</tr>
				<?php
					}
				?>
			</table>
		</form>
	</div>	
	<div class="clear"></div>
	<div id="footer">
		&copy; 2013 | <a href="http://rosyidah-binti.blogspot.com">rosyidah-binti.blogspot.com</a>
	</div>
</body>				
</html>
<?
}?>