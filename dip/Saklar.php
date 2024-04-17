<?php 
include_once "BarangElektronik.php";

class Saklar {
    private $item;

    private $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function berubah(): void {
        // Toggling the state of the switch
        $this->keaktifan = !$this->keaktifan;

        if ($this->keaktifan) {
            $this->item->beroperasi();
        } else {
            $this->item->berhenti();
        }
    }
}