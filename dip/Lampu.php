<?php 
include_once "BarangElektronik.php";

class Lampu implements BarangElektronik {
    public function beroperasi(): void {
        echo "Lampu sedang menyala.\n";
    }

    public function berhenti(): void {
        echo "Lampu dimatikan.\n";
    }
}