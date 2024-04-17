<?php 
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";
include_once "PrinterFlagship.php";

$flagshipPrinter = new PrinterFlagship();
$flagshipPrinter->cetakKertas();
$flagshipPrinter->terimaFax();
$flagshipPrinter->scanKertas();
echo "<br>";
$entryLevelPrinter = new PrinterEntryLevel();
$entryLevelPrinter->cetakKertas();
echo "<br>";
$midRangePrinter = new PrinterMidRange();
$midRangePrinter->cetakKertas();
$midRangePrinter->scanKertas();