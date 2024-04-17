<?php 
include_once "Videogroupmanager.php";

class WhatsApp implements VideoGroupManager {
    public function chat(): void {
        echo "Chat di WA. <br>";
    }
    public function sendPhotosAndVideos(): void {
        echo "Kirim foto WA. <br>";
    }
    public function callGroupVideo(): void {
        echo "panggilan grup VC WA. <br>";
    }
}