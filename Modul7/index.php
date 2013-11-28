<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tugas Praktikum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        padding-top: 100px;
        padding-bottom: 40px;
        background-color:#333333;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color:#FFFFFF;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
  </head>
	<?php
    session_start();
    ?>

  <body>

    <div class="container">

      <form class="form-signin name="form1" method="post" action="Tugas_Praktikum_Modul_4/proses_login.php">
      <h2 class="form-signin-heading">Please sign in</h2>
      <div class="control-group">
        	<div class="controls">
            	<div class="input-icon left">
                	<i class="icon-user"></i>
                    	<input type="text" class="login" name="user" placeholder="username">
                 </div>
             </div>
        </div>
        <div class="control-group">
        	<div class="controls">
            	<div class="input-icon left">
                	<i class="icon-lock"></i>
                    	<input type="password" class="login" name="pass" placeholder="password">                
             </div>
        </div>
       
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-success" type="submit">Login</button>
      </form>
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
