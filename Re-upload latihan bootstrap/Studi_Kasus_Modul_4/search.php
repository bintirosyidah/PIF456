<?php
include "../../modul4/koneksi.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title> Pencarian Data</title>
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
    <h2 class="heading"> Administrasi Data</h2>
		<table class="table table-striped">		
			<tr>
			<td width="120" height="30">NIM</td>
			<td width="170">Nama</td>
			<td width="120">Alamat</td>
			
		</tr>
		<?php
			$nama= $_POST['nama']; 
			$q = "SELECT * From mahasiswa where nama like '%$nama%'";
			$result = mysql_query($q);
			while ($isi = mysql_fetch_array($result)) {
		?>
		<tr align="center">
			<td> <?php echo $isi['nim']; ?> </td>
			<td> <?php echo $isi['nama']; ?> </td>
			<td> <?php echo $isi['alamat']; ?> </td>
		</tr>
		<?php
			}
		?>
        
	</table>
    </div>
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