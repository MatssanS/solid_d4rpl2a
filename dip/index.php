<?php 
include_once "BarangElektronik.php";
include_once "Saklar.php";
include_once "Lampu.php";
include_once "KipasAngin.php";

$lampu = new Lampu();
$lampu->beroperasi(); 
echo "<br>";
$lampu->berhenti();   
echo "<br>";
$kipas = new KipasAngin();
$kipas->beroperasi();
echo "<br>";
$kipas->berhenti();