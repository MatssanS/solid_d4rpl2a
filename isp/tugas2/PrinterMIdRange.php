<?php 
include_once "FiturScan.php";
include_once "FiturCetak.php";

class PrinterMidRange implements FiturScan, FiturCetak {
    public function cetakKertas(): void {
        echo "Cetak kertas di Printer Mid Range" . PHP_EOL;
    }

    public function scanKertas(): void {
        echo "Scan kertas di Printer Mid Range" . PHP_EOL;
    }
}