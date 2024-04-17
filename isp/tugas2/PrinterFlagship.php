<?php 
include_once "FiturCetak.php";
include_once "FiturFax.php";
include_once "FiturScan.php";

class PrinterFlagship implements FiturCetak, FiturScan, FiturFax {
    public function cetakKertas(): void {
        echo "Cetak kertas di Printer Flagship" . PHP_EOL;
    }

    public function terimaFax(): void {
        echo "Terima fax di Printer Flagship" . PHP_EOL;
    }
    public function scanKertas(): void {
        echo "Scan kertas di Printer Flagship" . PHP_EOL;
    }
}