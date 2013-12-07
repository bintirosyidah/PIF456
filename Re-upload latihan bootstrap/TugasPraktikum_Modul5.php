<!DOCTYPE HTML>
<html>
<head>
	<title>Ascending Dan Descending</title>
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
<div class="hero-unit">
<h2 class="heading">Data Siswa</h2>
	<table class="table table-striped">

                <?php
                        require_once'../modul4/koneksi.php';
                        $sql = "SELECT * FROM mahasiswa ORDER BY nim ";
                        $urutMaju = 'asc';
                        $urutMundur = 'asc';
                        if(isset($_GET['orderby'])){
                                $orderby=$_GET['orderby'];
                                $urutMaju=$_GET['urut'];
                                
                                $sql="SELECT * FROM  mahasiswa order by $orderby $urutMaju ";
                                if($urutMaju=='asc'){
                                        $urutMundur='desc';                                        
                                }else{
                                        $urutMundur='asc';
                                }
                        }
                ?>
                <th>
                        <td><a href='TugasPraktikum_Modul5.php?orderby=nim&urut=<?=$urutMundur;?>'>Nim &nbsp;&nbsp;</a><i class="icon-chevron-down icon-black"></i></td>
                        <td><a href='TugasPraktikum_Modul5.php?orderby=nama&urut=<?=$urutMundur;?>'>Nama &nbsp;&nbsp;</a><i class="icon-chevron-down icon-black"></i></td>
                        <td><a href='TugasPraktikum_Modul5.php?orderby=alamat&urut=<?=$urutMundur;?>'>Alamat &nbsp;&nbsp;</a><i class="icon-chevron-down icon-black"></i></td>
                </th>
                                                        
                <?php
                        $result = mysql_query($sql) or die (mysql_error());
                        $no = 1; 
                        while($rows=mysql_fetch_object($result)){
                ?>

                <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $rows -> nim;?></td>
                        <td><?php echo $rows -> nama;?></td>
                        <td><?php echo $rows -> alamat;?></td>
                </tr>
                
                <?php
                        $no++;
                        }
                ?>

        </table>
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