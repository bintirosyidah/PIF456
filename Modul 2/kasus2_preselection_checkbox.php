<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <title></title> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
        <style type="text/css"> 
         
        </style> 
    </head> 
    <body> 
        <form name="myform[]" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Hobby saya :<br/>
			<input type="checkbox" name="myform[]" value="Nonton tv" checked>Nonton tv
			<input type="checkbox" name="myform[]" value="Membaca" >Membaca
			<input type="checkbox" name="myform[]" value="Mendengarkan mp3
" checked>Mendengarkan mp3
			<input type="checkbox" name="myform[]" value="Sepak Bola" >Sepak Bola
			<input type="checkbox" name="myform[]" value="Menari" >Menari
			<input type="checkbox" name="myform[]" value="Basket" >Basket
			<input type="checkbox" name="myform[]" value="Game Online" >Game Online
			<input type="checkbox" name="myform[]" value="Memasak" checked>Memasak
			<br />
			<input type="submit" value="ok"/>
		</form>

	<?php
		//ekstrasi nilai
		if(isset($_POST['myform'])){
			foreach ($_POST['myform'] as $key=> $val){
				echo $key . ' => ' .$val . '<br/>';
			}
		}
	?>

    </body> 
</html>
