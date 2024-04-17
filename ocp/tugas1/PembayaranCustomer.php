<?php
include_once "Tipepembayaran.php";

class PembayaranCustomer {
    public function menerimaPembayaran(TipePembayaran $tipe): void {
        $tipe->memprosesPembayaran();
    }
}