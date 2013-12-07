<!DOCTYPE HTML>
<html>
<head>
	<title>Import</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <?php
    include '../header.php';
	?>
</head>
<body>
<div class="container">
	<div class="hero-unit">
<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 include "koneksi.php";
  
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['input']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nim = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $alamat=$data->val($i,3);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO mahasiswa values ('$nim','$nama','$alamat')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal

}
 if($hasil){ $sukses++;}
 else{ $gagal++;
 echo 'Pemasukan data gagal nim ' .$nim. ' sudah digunakan !' .'<br>'; 
 }
 //tampilkan report hasil import
 echo "<h3> Proses Import Data Mahasiswa</h3>";
 echo "<p>Jumlah data berhasil diimport : ".$sukses."<br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";
 
?>
</div>
	<table class="table table-bordered">
		<tr class="info">
        	<td>NIM</th>
            <td>Nama</th>
            <td>Alamat</th>
        </tr>
        	<?php
				$sql= mysql_query("select * from mahasiswa ");
				while ($isi= mysql_fetch_array($sql)){
			?>
        <tr>
			<td><?php echo $isi['nim']; ?> </td>
            <td><?php echo $isi['nama']; ?> </td>
            <td><?php echo $isi['alamat']; ?> </td>
         </tr>
		<?php
			}
		?>
	</table>
		<a href="download.php" style="font-size:18px" class="label label-info" >Download via server 1</a>
        <a href="download3.php" style="font-size:18px" class="label label-info" >Download via server 2</a>
</div>
   
		<script src="../js/jquery.js"></script>
        <script src="../js/bootstrap-transition.js"></script>
        <script src="../js/bootstrap-alert.js"></script>
        <script src="../js/bootstrap-modal.js"></script>
        <script src="../js/bootstrap-dropdown.js"></script>
        <script src="../js/bootstrap-scrollspy.js"></script>
        <script src="../js/bootstrap-tab.js"></script>
        <script src="../js/bootstrap-tooltip.js"></script>
        <script src="../js/bootstrap-popover.js"></script>
        <script src="../js/bootstrap-button.js"></script>
        <script src="../js/bootstrap-collapse.js"></script>
        <script src="../js/bootstrap-carousel.js"></script>
        <script src="../js/bootstrap-typeahead.js"></script>
</body>
</html>
