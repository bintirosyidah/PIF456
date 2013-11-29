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