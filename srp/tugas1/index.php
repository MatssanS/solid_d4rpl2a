<?php

include_once "Persegi.php";
include_once "PerhitunganPersegi.php";


$persegi = new Persegi(5);
$penghitung = new PenghitungPersegi();
echo "Luas persegi dengan sisi " . $persegi->getSisi() . " adalah " . $penghitung->hitungLuas($persegi) . " satuan luas.";