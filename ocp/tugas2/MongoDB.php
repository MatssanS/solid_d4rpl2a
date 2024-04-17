<?php 
include_once "DBMS.php";

class MongoDB implements DBMS {
    public function createConnection(): void{
        echo "Pake MongoDB. <br>";
    }
}