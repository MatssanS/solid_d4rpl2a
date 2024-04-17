<?php 
include_once "DBMS.php";
include_once "DBMSConnection.php";
include_once "MySQL.php";
include_once "MongoDB.php";

$DMBS = new DBMSConnection();
$DMBS->connect(new MySQL());
$DMBS->connect(new MongoDB());