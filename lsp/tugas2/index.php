<?php 
include_once "KendaraanBBM.php";
include_once "KendaraanListrik.php";
include_once "Mobil.php";
include_once "MobilListrik.php";

$mobil = new Mobil();
$mobil->menggunakanBBM();
echo "<br>";
$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBaterai();