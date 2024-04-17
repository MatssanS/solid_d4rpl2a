<?php 
include_once "Shape3dimension.php";
include_once "Shape2dimension.php";
include_once "Kubus.php";
include_once "Persegi.php";

$kubus = new Kubus();
$kubus->calculateVolume();
$kubus->calculateArea();

$persegi = new Persegi();
$persegi->calculateArea();