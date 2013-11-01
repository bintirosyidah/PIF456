<html>
<head>
<!--<body bgcolor="#b7d1c4">-->
<link rel="stylesheet" type="text/css" href="mos-style.css">

</head>

<?php
session_start();
?>

<body>
<div id="header">
	<div class="inHeaderLogin"></div>
</div>
<div id="loginForm">
	<div class="headLoginForm">
	Login
	</div>
	<div class="fieldLogin">
	<form id="form1" name="form1" method="post" action="proses_login.php">
	<label>Username</label><br>
	<input type="text" class="login" name="user"><br>
	<label>Password</label><br>
	<input type="password" class="login" name="pass"><br>
	<input type="submit" class="button" value="Login">
	</form>
	</div>
</div>
</body>
</html>
	 