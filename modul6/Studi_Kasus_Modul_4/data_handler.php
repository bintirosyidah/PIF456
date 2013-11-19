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
                        <li><a href="index.php">Studi Kasus</a></li>
                        <li><a href="../Tugas_Praktikum_Modul_4/index.php">Tugas Praktikum</a></li>
                     </ul>
                </li>   
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 5 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../StudiKasus_Modul5.php">Studi Kasus</a></li>
                        <li><a href="../TugasPraktikum_Modul5.php">Tugas Praktikum</a></li>
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
                        <li><a href="../Tugas_Praktikum_Modul_4/logout.php">Logout</a></li>
                     </ul>
                 </li>
            </ul>
        </div>
    </div>
</div>

<?php
function data_handler($root) {
	if (isset($_GET['act']) && $_GET['act'] == 'add') {
		data_editor($root);
        return;
     }
	 $res = mysql_query("SELECT count(*) AS total FROM " . MHS );
	 if(mysql_num_rows($res)) {
	 	if(isset($_GET['act']) && $_GET['act'] != '') {
			switch ($_GET['act']) {
				case 'edit':
					if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
						data_editor($root, $_GET['id']);
                    } else {
						show_admin_data($root);
                    }
                    break;
                case 'view':
                	if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                         data_detail($root, $_GET['id'], 1);
                     } else {
					 	show_admin_data($root);
                     }
                     break;
                case 'del':
					if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                    	$id = $_GET['id'];
						$sql = "DELETE FROM mahasiswa WHERE nim='$id'";
						$res = mysql_query($sql);
						if ($res) {
						?>
						<?php
						} else {
							echo 'Gagal menghapus data';
						}
					} else {
						show_admin_data($root);
					}
					show_admin_data($root);
					break;
				default:
					show_admin_data($root);
					break;
                }
        } else {
			show_admin_data($root);
        }
        	@mysql_close(res);
     } else {
     	echo 'Data Tidak ditemukan';
     }
}

function show_admin_data($root) { ?>
	<div class="container">
    	<div class="hero-unit">
			<?php
			$sql = 'SELECT nim, nama, alamat FROM mahasiswa';
			$res = mysql_query($sql);
	
			if($res) {
                $num = mysql_num_rows($res);
                if ($num) {
                ?>
					<h2 class="heading"> Administrasi Data</h2>
                        <form class="form-search" action="search.php" method="post">
                        	<a href="<?php echo $root; ?>&amp;act=add" class="btn btn-info"><i class="icon-plus icon-white"></i> Tambah Data</a>
                            	<div class="pull-right">
                                	<input type="text" name="nama" id="nama" placeholder="nama">
                                    <button type="submit" class="btn btn-info"><i class="icon-search icon-white"></i>&nbsp;Search</button>
                                </div>
         				 </form> 
           
    						<table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Menu</th>
                            </tr>
							<?php
							$i=1;
							while($row = mysql_fetch_row($res)) {
								$bg = (($i % 2) != 0) ? '' : 'even';
								$id = $row[0]; 
							?>
								<tr class="<?php echo $bg; ?>">
									<td width="2%"><?php echo $i;?></td>
									<td><a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id;?>" title="Lihat Data"><?php echo $id;?></a></td>
                                    <td><?php echo $row[1];?></td>
                                    <td><?php echo $row[2];?></td>
                                    <td align="center"><a href ="<?php echo $root;?>&amp;act=edit&amp;id=<?php echo $id;?>">
                                    	<span class="label label-info">Edit</span></a> 
                                        	<a href ="<?php echo $root;?>&amp;act=del&amp;id=<?php echo $id;?>" onclick="return konfirm('<? echo $id;?> ')"> 
                                         <span class="label label-info">Hapus</span> 
                                  </td>
								</tr>
							<?php
							$i++;
							}
							?>
							</table>
					
					<?php
		    } else {
            	echo 'Belum ada data, isi <a href="' . $root.'&amp;act=add">di sini</a>';
        	}
        mysql_close();
	}	
	?>
    </div>
     <footer>
        <p>Binti Rosyidah 2013</p>
      </footer>
    </div>
	<?php
}

function data_detail($root, $id) {
	$sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
    $res = mysql_query($sql);
    if($res) {
		if (mysql_num_rows($res)) { ?>
			<div class="container">
				<div class="hero-unit">
				<h2 class="heading">Data Siswa</h2>
				<table class="table table-striped">
				<?php
					$row = mysql_fetch_row($res); ?>
					<tr>
						<td>NIM</td>
						<td><?php echo $row[0];?></td>
					</tr>
					<tr>
                        <td>Nama</td>
                        <td><?php echo $row[1];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $row[2];?></td>
                    </tr>
                 </table>
			<?php
        } else {
         	echo 'Data Tidak Ditemukan';
        }
	mysql_close();
	}
}
?>
	</div>
</div>
<?php

function data_editor($root, $id = 0) {
        $view = true;
        if(isset($_POST['nim']) && $_POST['nim']) {
                if (!$id) {
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("INSERT INTO mahasiswa VALUES ('".$nim."', '" .$nama."', '" .$alamat."')");
                        if($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php
                } else {
                        echo 'Gagal menambah data';
                }
                } else {
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$id'");
                        if ($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php
                } else {
                        echo 'Gagal Modifikasi';
                }
                }
        }
        if ($view) {
                if ($id) {
                        $sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
                        $res = mysql_query($sql);
                        if ($res) {
                                if(mysql_num_rows($res)) {
                                        $row = mysql_fetch_row($res);
                                        $nim = $row[0];
                                        $nama = $row[1];
                                        $alamat = $row[2];
                                } else {
                                        show_admin_data();
                                        return;
                                }
                        }
                } else {
                        $nim = @$_POST['nim'];
                        $nama = @$_POST['nama'];
                        $alamat = @$_POST['alamat'];
                }
                ?>
<div class="container">
	<div class="hero-unit">                 
		<h2> <?php echo $id ? 'Edit' : 'Tambah';?> Data </h2>
		<form action="" method="post">
			<table class="table table-hove">
				<tr>
                	<td width=100>NIM*</td>
                    <td><input type="text" name="nim" value="<?php echo $nim;?>"/></td>
                </tr>
                <tr>
                	<td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $nama;?>"/></td>
                </tr>
                <tr>
                	<td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="Alamat Lengkap" value="<?php echo $alamat;?>"/></td>
                </tr>
                <tr>
                	<td> </td>
                    <td> <input type="submit" class="btn btn-success"  value="Submit"/> <input class="btn btn-success" type="button" value="cancel" onClick="history.go(-1)"/></td>
                </tr>
            </table>
         </form> <br/>
		<p> Ket: * Harus diisi</p>
	</div>
	
</div>
<?php
        }
        return false;
        }

?>

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