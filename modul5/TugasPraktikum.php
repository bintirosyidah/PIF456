<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Ascending Dan Descending</title>
</head>
<body>

        <table border="1" width="500px">

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
                        <td><a href='TugasPraktikum.php?orderby=nim&urut=<?=$urutMundur;?>'>Nim</a></td>
                        <td><a href='TugasPraktikum.php?orderby=nama&urut=<?=$urutMundur;?>'>Nama</a></td>
                        <td><a href='TugasPraktikum.php?orderby=alamat&urut=<?=$urutMundur;?>'>Alamat</a></td>
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
</body>
</html>