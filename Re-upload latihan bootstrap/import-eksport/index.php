<!DOCTYPE HTML>
<html>
<head>
	<title>Import</title>
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
<?php
include '../header.php';
?>
</head>
<body>
<div class="container">
	<div class="hero-unit">
    	<h2 class="heading">IMPORT DATA MAHASISWA</h2>
      	<form method="post" enctype="multipart/form-data" action="proses_import.php">
        	upload file xls only : <input name="input" type="file" class="btn btn-mini btn-info"  placeholder="" required> 
			 <button type="submit" class="btn btn-info" name="upload">import</button>
		</form>
     </div>
</div>     
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