<?php
include_once "Mahasiswa.php";
include_once "MahasiswaView.php";

$mahasiswa = new Mahasiswa("2205018", "MatssanS");
$view = new MahasiswaView();
$view->showMahasiswa($mahasiswa);