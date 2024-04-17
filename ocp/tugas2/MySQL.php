<?php 
include_once "DBMS.PHP";

class MySQL implements DBMS {
    public function createConnection(): void{
        echo "Pake MySQL. <br>";
    }
}