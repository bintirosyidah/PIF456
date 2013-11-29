<!DOCTYPE HTML>
<html>
<head>
	<title> Pencarian Data</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
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
                        <li><a href="Studi_Kasus_Modul_4/index.php">Studi Kasus</a></li>
                        <li><a href="Tugas_Praktikum_Modul_4/index.php">Tugas Praktikum</a></li>
                     </ul>
                </li>   
                 <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 5 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="StudiKasus_Modul5.php">Studi Kasus</a></li>
                        <li><a href="TugasPraktikum_Modul5.php">Tugas Praktikum</a></li>
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
                        <li><a href="Tugas_Praktikum_Modul_4/logout.php">Logout</a></li>
                     </ul>
                 </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
<div class="hero-unit">
<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2013 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.9, 2013-06-02
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Asia/Jakarta');

/** Include PHPExcel */
require_once '../../../PHPExcel/Classes/PHPExcel.php';
require_once 'koneksi.php';

// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Binti Rosyidah")
							 ->setLastModifiedBy("Binti Rosyidah")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$query = mysql_query('select nim, nama, alamat from mahasiswa');

//set table header
$objPHPExcel->getActiveSheet()->setCellValue('A8', 'No');
$objPHPExcel->getActiveSheet()->setCellValue('B8', 'NIS');
$objPHPExcel->getActiveSheet()->setCellValue('C8', 'Nama');
$objPHPExcel->getActiveSheet()->setCellValue('D8', 'Alamat');

//start data from row 11
$i = 9;
$no= 1;
while($data=mysql_fetch_array($query)){
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $no);
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $data['nim']);
	$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $data['nama']);
	$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $data['alamat']);
	$i++;
	$no++;
}

// Set title row bold;
$objPHPExcel->getActiveSheet()->getStyle('C7:I7')->getFont()->setBold(true);
// Set fills
$objPHPExcel->getActiveSheet()->getStyle('A8:D8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A8:D8')->getFill()->getStartColor()->setARGB('FFFFFF00');
$objPHPExcel->getActiveSheet()->getStyle('B8:D8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A8:D8')->getFill()->getStartColor()->setARGB('FFFFFF00');

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Add an image to the worksheet
/*$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('LOGO');*/

/*$objDrawing->setCoordinates('B2');*/
/*$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());*/

$objPHPExcel->getActiveSheet()->mergeCells('A2:E2');
$objPHPExcel->getActiveSheet()->setCellValue('A2', "PEMERINTAH KOTA MALANG");
$objPHPExcel->getActiveSheet()->mergeCells('A3:E3');
$objPHPExcel->getActiveSheet()->setCellValue('A3', "DINAS PENDIDIKAN");
$objPHPExcel->getActiveSheet()->mergeCells('A4:E4');
$objPHPExcel->getActiveSheet()->setCellValue('A4', "UNIVERSITAS NEGERI MALANG");
$objPHPExcel->getActiveSheet()->mergeCells('A5:E5');
$objPHPExcel->getActiveSheet()->setCellValue('A5', "Jl. Surabaya, Telp. 427809");
$objPHPExcel->getActiveSheet()->mergeCells('A6:E6');
$objPHPExcel->getActiveSheet()->setCellValue('A6', "REKAPITULASI DATA MAHASISWA TAHUN 2013");
$objPHPExcel->getActiveSheet()->getStyle('A2:E6')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getStyle('A2:E5')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('A2:E6')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2:E6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
/*echo date('H:i:s') , " Set header/footer" , EOL;
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&G&C&HPlease treat this document as confidential!');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');
*/
// Add a drawing to the header
/*echo date('H:i:s') , " Add a drawing to the header" , EOL;
$objDrawing = new PHPExcel_Worksheet_HeaderFooterDrawing();
$objDrawing->setName('PHPExcel logo');
$objDrawing->setPath('./images/phpexcel_logo.gif');
$objDrawing->setHeight(36);
$objPHPExcel->getActiveSheet()->getHeaderFooter()->addImage($objDrawing, PHPExcel_Worksheet_HeaderFooter::IMAGE_HEADER_LEFT);
*/
// Set page orientation and size
echo date('H:i:s') , " Set page orientation and size" , EOL;
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('Mahasiswa 2013');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

/*
*
*
UNTUK autofilter
// Set autofilter
echo date('H:i:s').' Set autofilter'.EOL;
// Always include the complete filter range!
// Excel does support setting only the caption
// row, but that's not a best practise...
$objPHPExcel->getActiveSheet()->setAutoFilter($objPHPExcel->getActiveSheet()->calculateWorksheetDimension());

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
*
*
*/


// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Save Excel 95 file
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing files" , EOL;
echo 'Files have been created in ' , getcwd() , EOL;
?><br />
<input class="btn btn-success" type="button" value="OK" onClick="history.go(-1)"/>
</div>
</div>
</body>
</html>
