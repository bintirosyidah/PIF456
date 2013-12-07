<!DOCTYPE HTML>
<html>
<head>
	<title> Pencarian Data</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <?php 
		include 'header.php';
	?>

</head>
<body>
<div class="container">
	<div class="row-fluid">
	<h2> Daftar Mahasiswa</h2>
		<table class="table table-bordered">
        	<tr class="info">
            	<td>&nbsp;</td>
            	<td><b>Nim</b></td>
                <td><b>Nama</b></td>
                <td><b>Alamat</b></td>
             </tr>
			<?php
				error_reporting(0);
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
                        <td><?php 	echo $no?></td>
                        <td><?php	echo $rows -> nim;?></td>
                        <td><?php	echo $rows -> nama;?></td>
                        <td><?php	echo $rows -> alamat;?></td>
                    </tr>
                    <?php		
					$no++;

				}?>
		</table>
		<br>
		<p>
			<a href="download3.php">download</a>
		</p>
		<?php		
		//=============PAGING ========================
				$sql_paging = mysql_query("select nim  from mahasiswa");
				$jmldata = mysql_num_rows($sql_paging);
				$jumlah_halaman = ceil($jmldata / $batas);
				?>
                <div class="pagination pagination-centered">
                <?
	
				echo "Halaman :";
				for($i = 1; $i <= $jumlah_halaman; $i++)
					if($i != $halaman) {
					?>
                    <ul>
                		<li class="disabled"></li>
	                </ul>
					<?
					
						echo "<a href=StudiKasus_Modul5.php?halaman=$i>$i &nbsp;&nbsp;</a>";
					} else {
						echo "<b>$i &nbsp;&nbsp; </b>";
					}
				mysql_close();?>
			<br>
			Jumlah data : &nbsp;&nbsp;<?php echo $jmldata;?>
	</div>
	  
    <footer>
        <p>Binti Rosyidah 2013</p>
      </footer>
</div>              
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
	</body>
</html>
