<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pencarian Data</title>
</head>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama <input type="text" name="nama" size=40 value="<?php 
			echo isset($_GET['nama'])? $_GET['nama'] : '';?>"/>
<input type="submit" value="CARI" />
</form>
<?php
	if(isset ($_GET['nama'])){
		require_once'../modul4/koneksi.php';
		
		//kata kunci pencarian
		$key =$_GET['nama'];
		
		//variabel $sql berisi pernyataan SQL pencarian
		//seleksi semua nama mahasiswa yang mengandung pada variabel key
		$sql="SELECT * FROM mahasiswa WHERE nama LIKE '%$key%'";
		
		$res = mysql_query($sql);
		
		if($res){
			$num = mysql_num_rows ($res);
			
			if ($num){
				echo 'ditemukan ' .$num. ' row(s)';?>
                
                <table border="1" cellspacing="1" cellpadding="5">
                	<tr>
                    	<th>#</th>
                        <th width="100">NIM</th>
                        <th width="150">Nama</th>
                        <th>Alamat</th>
                    </tr>
                    <?php
					$i=1;
					while ($row=mysql_fetch_row($res)){ ?>
						<tr>
                        	<td> <?php echo $i;?> </td>
                        	<td> <?php echo $row[0];?> </td>                        	
							<td> <?php echo $row[1];?> </td>                        
							<td> <?php echo $row[2];?> </td>							                      	
						</tr>      
                    <?php
					$i++;
					}
					?>
                </table>
                <?php
				}else{
					echo 'data tidak ditemukan';
				}                            
			}
		}else{
			echo 'masukkan kata kunci pencarian';
		
	}
?>
<body>
</body>
</html>
