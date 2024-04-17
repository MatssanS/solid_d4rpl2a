<?php 
include_once "Tipepembayaran.php";
include_once "PembayaranCustomer.php";
include_once "Debit.php";
include_once "Kredit.php";
include_once "Cash.php";

$pembayaran = new PembayaranCustomer();
$pembayaran->menerimaPembayaran(new Debit());
echo "<br>";
$pembayaran->menerimaPembayaran(new Kredit());
echo "<br>";
$pembayaran->menerimaPembayaran(new Cash());