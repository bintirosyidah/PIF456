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
</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container-narrow">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </a>
         </div>
        <div class="nav-collapse collapse">
        	<ul class="nav">
            	<li> <a href="#">Home</a> </li>
                <li> <a href="#">Menu1</a> </li>
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 4 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Studi_Kasus_Modul_4/index.php">Studi Kasus</a></li>
                        <li><a href="Tugas_Praktikum_Modul_4/index.php">Tugas Praktikum</a></li>
                     </ul>
                </li>   
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 5 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="StudiKasus_Modul5.php">Studi Kasus</a></li>
                        <li><a href="TugasPraktikum_Modul5.php">Tugas Praktikum</a></li>
                     </ul>
                </li>        
                <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li class="nav-header">Kategori</li>
                        <li><a href="#">Pilihan1</a></li>
                        <li><a href="#">Pilihan2</a></li>
                        
                        <li class="divider"></li>
                        <li class="nav-header">Kategori2</li>
                        <li><a href="#">Piliha1</a></li>
                    </ul>
                 </li>
             </ul>
             <ul class="nav pull-right">
             	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>&nbsp;&nbsp;bintirosyidah<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li><a href="#"><i class="icon-user icon-black"></i>&nbsp;&nbsp;My Profile</a></li>
                        <li><a href="#"><i class="icon-wrench icon-black"></i>&nbsp;&nbsp;Account Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="Tugas_Praktikum_Modul_4/logout.php">Logout</a></li>
                     </ul>
                 </li>
            </ul>
        </div>
    </div>
</div>
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
