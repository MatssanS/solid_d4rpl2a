<?php 
include_once "Postmediamanager.php";

class Instagram implements PostMediaManager {
    public function chat(): void {
        echo "Chat di Instagram. <br>";
    }
    
    public function sendPhotosAndVideos(): void {
        echo "Mengirim foto. <br>";
    }
    
    public function publishPost(): void {
        echo "Mempublis post. <br>";
    }
}