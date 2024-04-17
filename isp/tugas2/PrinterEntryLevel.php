<?php 
include_once "FiturCetak.php";
class PrinterEntryLevel implements FiturCetak {
    public function cetakKertas(): void {
        echo "Cetak kertas di Printer Entry Level" . PHP_EOL;
    }
}
