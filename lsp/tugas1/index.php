<?php 
include_once "Postmediamanager.php";
include_once "SocialMedia.php";
include_once "Videogroupmanager.php";
include_once "WhatsApp.php";
include_once "Instagram.php";

$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

$instagram = new Instagram();
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();