<?php 
include_once "Shape3dimension.php";
include_once "Shape2dimension.php";

class Kubus implements Shape3Dimension, Shape2Dimension {
    public function calculateVolume(): void {
        echo "hitung volume kubus.  <br>";
    }

    public function calculateArea(): void {
        echo "hitung area kubus. <br>";
    }
}