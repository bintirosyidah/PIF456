<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <title></title> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
        <style type="text/css"> 
         
        </style> 
    </head> 
    <body> 
       <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <?php 
                $cpu = "p2"; 
            ?> 
            <select name="pilih"> 
                <option  <?php if($cpu == "p4"){ echo "selected";}?> value="p4">Pentium 4</option> 
                <option  <?php if($cpu == "p3"){ echo "selected";}?> value="p3">Pentium 3</option> /*ini bagian yang akan muncul pertama kali*/
                <option  <?php if($cpu == "p2"){ echo "selected";}?> value="p2">Pentium 2</option> 
            </select> 
	     <br/>
		<input type="submit" value="ok"/><br/>
	<?php
		if(isset($_POST['pilih'])){
			echo 'Anda memilih.<br/>';
			echo $_POST['pilih'];
		}
	?>
        </form> 
    </body> 
</html>
